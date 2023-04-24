<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'description',
        'image',
        'categ_id',
        'price',
        'magasine_id',
    ];
    public function magasine()
{
    return $this->belongsTo(Magasine::class);
}

}
