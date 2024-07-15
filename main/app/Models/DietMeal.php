<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DietMeal extends Model
{
    use HasFactory;

    protected $fillable = [
        'diet_id',
        'meal_id',
    ];

    public function diet()
    {
        return $this->belongsTo(Diet::class);
    }

    public function meal()
    {
        return $this->belongsTo(Meal::class);
    }
}
