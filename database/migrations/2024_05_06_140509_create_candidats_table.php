<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->text('about')->nullable();
            $table->string('job_title')->nullable();
            $table->string('location')->nullable();
            $table->string('cv')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('candidat_skill', function (Blueprint $table) {
            $table->id();
            $table->foreignId('candidat_id')->constrained();
            $table->foreignId('skill_id')->constrained();
            $table->timestamps();
        });

        Schema::create('candidat_education', function (Blueprint $table) {
            $table->id();
            $table->foreignId('candidat_id')->constrained();
            $table->foreignId('graduation_level_id')->constrained('graduations');
            $table->string('degree');
            $table->string('university');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });

        Schema::create('candidat_experience', function (Blueprint $table) {
            $table->id();
            $table->foreignId('candidat_id')->constrained();
            $table->string('position');
            $table->string('company');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('candidats');
    }
}
