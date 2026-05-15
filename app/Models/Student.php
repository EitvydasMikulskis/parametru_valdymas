<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'surname', 'address', 'phone', 'city_id'];

    // 👇 THIS IS WHAT YOU ARE MISSING
    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }
}