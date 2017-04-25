<?php
namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Role extends Eloquent
{
    /**
     * Set timestamps off
     */
    public $timestamps = false;

    /**
     * Get users with a certain role
     */
    public function users()
    {
        return $this->belongsToMany('App\User', 'App\users_roles');
    }
}