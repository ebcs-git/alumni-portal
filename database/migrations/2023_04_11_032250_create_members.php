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
        Schema::create('members', function (Blueprint $table) {
            $table->increments('member_id')->unsigned()->nullable();
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->date('birthdate');
            $table->integer('batch_year');
            $table->string('batch_name')->nullable();
            $table->string('current_position');
            $table->string('org_name');
            $table->string('contact_no')->unique();
            $table->string('facebook')->nullable();
            $table->string('addr_municipality');
            $table->string('addr_country');
            $table->string('email')->unique();
            $table->string('password');
            $table->tinyInteger('role')->default(0);
            $table->timestamp('created_time');
            
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
