<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProblemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user-problems', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('probem_id');
            $table->string('problem_start');
            $table->string('problem_end');
            $table->string('problem_completed');
            $table->string('problem_correct');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user-problems');
    }
}
