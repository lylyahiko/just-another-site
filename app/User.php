<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Role;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the roles a user has
     */
    public function roles()
    {
        return $this->belongsToMany('App\Role', 'users_roles');
    }

    /**
     * Find out if User is a User, based on if has any roles
     *
     * @return boolean
     */
    public function isUser()
    {
        $roles = $this->roles->toArray();
        return !empty($roles);
    }

    /**
     * Find out if user has a specific role
     *
     * $return boolean
     */
    public function hasRole($check)
    {
        return in_array($check, array_pluck($this->roles->toArray(), 'name'));
    }

    /**
     * Get key in array with corresponding value
     *
     * @return int
     */
    private function getIdInArray($array, $term)
    {
        array_unshift($array, "delete");
        unset($array[0]);
        foreach ($array as $key => $value) {
            if ($value == $term) {
                return $key;
            }
        }

        throw new \Exception("Failed to find ID");
    }

    /**
     * Add roles to user to make them a concierge
     */
    public function makeUser($title)
    {
        $assigned_roles = array();

        $roles = array_pluck(Role::all()->toArray(), 'name');
        switch ($title) {
            case 'super-admin':
                $assigned_roles[] = $this->getIdInArray($roles, 'create-user');
                $assigned_roles[] = $this->getIdInArray($roles, 'delete-user');
                $assigned_roles[] = $this->getIdInArray($roles, 'update-user');
            case 'admin':
                $assigned_roles[] = $this->getIdInArray($roles, 'delete-problem');
                $assigned_roles[] = $this->getIdInArray($roles, 'update-problem');
            case 'user':
                $assigned_roles[] = $this->getIdInArray($roles, 'create-problem');
                break;
            default:
                throw new \Exception("The employee status entered does not exist");
        }
        foreach ($assigned_roles as $role) {
            $this->roles()->attach($role);
        }
    }

}
