<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product7 extends Model
{
    use HasFactory;
 protected $fillable = [
        'name',
        'qty',
        'price',
        'description'
    ];
}
