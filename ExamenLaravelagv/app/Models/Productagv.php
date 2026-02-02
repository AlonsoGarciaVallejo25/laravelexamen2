<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productagv extends Model
{
    use HasFactory;

    protected $table = 'productagvs';

    protected $fillable = [
        'name',
        'price',
        'stock'
    ];
}
