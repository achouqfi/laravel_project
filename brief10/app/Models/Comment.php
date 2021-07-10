<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Comment extends Model
{
    use HasFactory;
    public function Movie(){
        return $this->belongsTo("App/Models/movies");
    }

    public function User(){
        return $this->belongsTo("App/Models/User");
    }
}
