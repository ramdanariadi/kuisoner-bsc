<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('school_scores', function (Blueprint $table) {
            $table->id();

            $table->integer('school_id')->unsigned();
            $table->integer('questionnaire_type_id')->unsigned();
            $table->integer('score')->unsigned();
            $table->float('multiple_by')->unsigned();
            $table->float('total')->unsigned();
            $table->tinyInteger('semester')->unsigned();
            $table->integer('year')->unsigned();

            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->integer('deleted_by')->unsigned()->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->index(['school_id', 'questionnaire_type_id', 'semester', 'year'], 'idx_school_qtype_sem_year');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school_scores');
    }
};
