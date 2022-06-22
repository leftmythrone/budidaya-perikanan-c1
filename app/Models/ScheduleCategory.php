<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduleCategory extends Model
{
    use HasFactory;
    
    public function schedule()
    {
        return $this->HasMany(Schedule::class, 'schedule_category_id', 'id');
    }

    // GUARDING IMPORTANT
    protected $guarded = ['id'];
}
