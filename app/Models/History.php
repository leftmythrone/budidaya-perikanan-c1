<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsTo(\App\Models\User::class, 'history_user_id');
    }

    // GUARDING IMPORTANT
    protected $guarded = ['id'];
}
