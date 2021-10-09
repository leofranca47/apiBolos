<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InterestedList extends Model
{
    use HasFactory;

    protected $table = 'interested_list';

    protected $fillable = [
        'name',
        'email',
        'created_at',
        'updated_at'
    ];

    public function cake()
    {
        return $this->belongsToMany(Cake::class, 'interested_cake', 'interested_id', 'cake_id');
    }
}
