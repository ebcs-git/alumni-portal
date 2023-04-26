<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Casts\Attribute;



class Member extends Model
{
    use HasFactory;

    public $table = 'members';
    public $id = 'member_id';
    public $incrementing = true;
    public $timestamps = true;

   public function user(){
    return $this->belongsTo('User', 'local_key', 'parent_key');
}
}
