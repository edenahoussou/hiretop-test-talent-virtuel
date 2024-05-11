<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFewMoreUserDetailToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('dob')->nullable();
            $table->string('photo')->nullable();
            $table->string('browser')->nullable();
            $table->string('ip')->nullable();
            $table->string('two_factor')->nullable()->default('disabled');
            $table->string('activity_logs')->nullable()->default('disabled');
        });
    }
}
