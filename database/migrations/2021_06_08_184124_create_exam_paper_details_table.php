<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamPaperDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_paper_details', function (Blueprint $table) {
            $table->id();
            $table->string('exam_paper_code');
            $table->string('subject_code');
            $table->string('ques_type');
            $table->integer('ques_no');
            $table->string('ques_title');
            $table->string('opt_A');
            $table->string('opt_B');
            $table->string('opt_C');
            $table->string('opt_D');
            $table->string('answer');
            $table->integer('marks_given');
            $table->string('ques_set_by');
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
        Schema::dropIfExists('exam_paper_details');
    }
}
