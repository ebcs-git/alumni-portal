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
        DB::unprepared('
        CREATE TRIGGER user_update_trigger
            AFTER UPDATE ON members
            FOR EACH ROW
            BEGIN
            UPDATE users
            SET name = CONCAT(new.firstname," ",new.middlename," ", new.lastname), email=new.email,password=new.password,updated_at = NOW()
            WHERE member_id = NEW.member_id;
           END

        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_update_trigger');
    }
};
