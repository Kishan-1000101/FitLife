<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'specialization',
        'contact',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_trainers');
    }
}
