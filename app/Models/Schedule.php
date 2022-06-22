<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    public function schedulecat()
    {
        return $this->belongsTo(\App\Models\ScheduleCategory::class, 'schedule_category_id');
    }

    // GUARDING IMPORTANT
    protected $guarded = ['id'];
}
