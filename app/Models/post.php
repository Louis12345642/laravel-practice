<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   public function category(){
        return $this->belongsTo(category::class);
    }

    public function Author(){
        return $this->belongsTo(User::class,'author_id');
    }
    use HasFactory;
    protected $filterable=(['ttle','excert','id']);
}
