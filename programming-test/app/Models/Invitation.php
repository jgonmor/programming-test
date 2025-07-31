<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    protected $fillable = ['user_id', 'token', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}