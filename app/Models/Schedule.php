<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'subject_id', 'day_id', 'start_time', 'end_time'
    ];

    /**
     * Relation One to Many `schedules` table with `subjects` table
     */
    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id', 'id');
    }

    /**
     * Relation One to Many `schedules` table with `days` table
     */
    public function day()
    {
        return $this->belongsTo(Day::class, 'day_id', 'id');
    }
}
