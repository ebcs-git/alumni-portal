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
        CREATE TRIGGER user_trigger AFTER INSERT ON `members` FOR EACH ROW
        BEGIN 
         UPDATE users (`member_id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`role`, `profile_pic`,`cover_photo`,`created_at`, `updated_at`)
          VALUES (new.member_id,CONCAT(new.firstname," ",new.middlename," ", new.lastname),new.email,null,new.password,null,new.role,null,null, now(), null);
        END
        ');
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_trigger');
    }
};
