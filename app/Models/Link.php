<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $fillable = ['city1', 'city2', 'distanceHour'];
    use HasFactory;
}
