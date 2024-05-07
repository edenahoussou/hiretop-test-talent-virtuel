<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->foreignId('event_type_id')->constrained();
            $table->foreignId('candidate_id')->constrained();
            $table->foreignId('job_id')->constrained('job_post_candidates');
            $table->mediumText('comments')->nullable();
            $table->string('location')->nullable();
            $table->date('start_at')->nullable();
            $table->date('end_at')->nullable();
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
        Schema::dropIfExists('events');
    }
}
