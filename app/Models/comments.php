<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    use HasFactory;

    protected $talbe = 'comments';
    protected $primarKey = 'id';
    protected $fillable = ['title','author','context'];


}
