<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * Relation Many to One `subjects` table with `schedules` table
     */
    public function schedules()
    {
        return $this->hasMany(Schedule::class, 'subject_id', 'id');
    }
    
}
