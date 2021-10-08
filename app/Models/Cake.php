<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cake extends Model
{
    use HasFactory;

    protected $table = 'cakes';

    protected $fillable = [
        'name',
        'weigth',
        'price',
        'amount',
        'created_at',
        'updated_at'
    ];
}
