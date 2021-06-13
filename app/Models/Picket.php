<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Picket extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'student_id', 'day_id'
    ];

    /**
     * Relation One to Many `pickets` table with `students` table
     */
    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }

    /**
     * Relation One to Many `pickets` table with `days` table
     */
    public function day()
    {
        return $this->belongsTo(Day::class, 'day_id', 'id');
    }
}
