<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Magasine extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'prop_id',
        'adress',
        'status',
        'image',
        'teleNumber',
        'city_id',
    ];
}
