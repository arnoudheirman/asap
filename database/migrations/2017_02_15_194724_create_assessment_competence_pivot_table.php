<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssessmentCompetencePivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assessment_competence', function (Blueprint $table) {
            $table->integer('assessment_id')->unsigned()->index();
            $table->foreign('assessment_id')->references('id')->on('assessments')->onDelete('cascade');
            $table->integer('competence_id')->unsigned()->index();
            $table->foreign('competence_id')->references('id')->on('competences')->onDelete('cascade');
            $table->primary(['assessment_id', 'competence_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('assessment_competence');
    }
}
