<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'work';

    protected $fillable = [
        'ism',
        'familya',
        'lavozim',
        'stavka',
    ];
}
