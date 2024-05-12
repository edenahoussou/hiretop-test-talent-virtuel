<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusDegreeProofToCandidatEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('candidat_education', function (Blueprint $table) {
            $table->string('degree_proof')->nullable()->after('degree');
            $table->string('status')->nullable()->after('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('candidat_education', function (Blueprint $table) {
            //
        });
    }
}
