<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $table  = 'about_team';

    protected $fillable = 
    [
        'img',
        'name',
        'lavozim',
        'about',
    ];
}
