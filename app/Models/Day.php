<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'day'
    ];

    /**
     * Relation Many to One `days` table with `schedules` table
     */
    public function schedules()
    {
        return $this->hasMany(Schedule::class, 'day_id', 'id');
    }

    /**
     * Relation Many to One `days` table with `pickets` table
     */
    public function pickets()
    {
        return $this->hasMany(Picket::class, 'day_id', 'id');
    }

    
}
