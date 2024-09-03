<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $fillable = ['levelCount', 'cityCount', 'totalTime', 'criminalLevel'];
    use HasFactory;
}
