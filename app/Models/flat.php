<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\plaza;

class flat extends Model
{
    use HasFactory;


public function plaza(){
    return $this->belongsTo(plaza::class,'plaza_id','id');

}

}
