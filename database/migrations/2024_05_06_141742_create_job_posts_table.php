<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // disable foreign key check for this connection before running 
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        Schema::create('job_posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->foreignId('location_id')->constrained('company_locations');
            $table->foreignId('company_id')->constrained('companies');
            $table->foreignId('job_type_id')->constrained('job_types');
            $table->string('salary')->nullable();
            $table->date('closing_date');
            $table->foreignId('posted_by_id')->constrained('users');
            $table->string('status')->comment('Status of the job post : published, draft');
            $table->string('job_stage')->comment('Étape du processus de recrutement');
            $table->foreignId('experience_level_id')->constrained('experience_levels');
            $table->foreignId('graduation_level_id')->constrained('graduations');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('job_post_candidates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_post_id')->constrained('job_posts');
            $table->foreignId('candidate_id')->constrained('users');
            $table->string('slug');
            $table->string('candidate_status')->default('applied')->comment('applied, shortlisted, hired, rejected');
            $table->string('cover_letter');
            $table->string('resume');
            $table->string('review')->nullable();
            $table->string('disqualification_reason')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('job_posts');
        Schema::dropIfExists('job_post_candidates');
    }
}
