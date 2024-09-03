<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CityAttribute extends Model
{
    use HasFactory;
    protected $fillable = ['cityId', 'attributeId', 'attributeName'];
}
