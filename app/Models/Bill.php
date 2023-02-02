<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    protected $table ='bills';
    public function cus(){
        return $this->hasOne(User::class,'id','id_users');
    }
}
