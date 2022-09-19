<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   public function category(){
        return $this->belongsTo(category::class);
    }
    use HasFactory;
    protected $filterable=(['ttle','excert','id']);
}
