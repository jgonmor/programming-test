<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Policy extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'plan_reference',
        'first_name',
        'last_name',
        'investment_house',
        'last_operation',
        'user_id',
    ];

    function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}