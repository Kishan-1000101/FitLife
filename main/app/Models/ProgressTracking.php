<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgressTracking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'date',
        'workout_completed',
        'calories_consumed',
        'weight',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
