<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $table = 'images';
    protected $fillable = ['path'];
}
