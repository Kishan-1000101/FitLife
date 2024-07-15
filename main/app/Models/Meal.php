<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'type',
        'calories',
    ];

    public function diets()
    {
        return $this->belongsToMany(Diet::class, 'diet_meals');
    }
}
