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
        Schema::create('masterlist_alumni', function (Blueprint $table) {
            $table->id();
            $table->integer('alumni_id');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->integer('batch_year');
            $table->string('batch_name');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('masterlist_alumni');
    }
};
