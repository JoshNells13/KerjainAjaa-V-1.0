<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','name'];

    public function User(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function Task(){
        return $this->hasMany(task::class,'category_id');
    }
}
