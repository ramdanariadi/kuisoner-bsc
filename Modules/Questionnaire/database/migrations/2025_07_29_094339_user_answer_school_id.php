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
         Schema::table('user_answers', function (Blueprint $table) {
            $table->integer('school_id')->unsigned();
            $table->tinyInteger('semester')->unsigned();
            $table->integer('year')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_answers', function (Blueprint $table) {
            $table->dropColumn('school_id');
            $table->dropColumn('semester');
            $table->dropColumn('year');
        });
    }
};
