<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_id',
        'product_id',
    ];
    // public function product()
    // {
    //     return $this->belongsTo(Product::class);
    // }

    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'client_id');
    // }
}
