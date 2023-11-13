<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'car_model_id',
        'price',
        'image',
    ];

    public function model(): BelongsTo
    {
        return $this->belongsTo(CarModel::class, 'car_model_id');
    }
}
