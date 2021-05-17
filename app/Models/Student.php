<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'no_absen', 'student_role', 'name', 'picture', 'description'
    ];

    public function getImageStudent()
    {
        return asset('storage/images/students/'.$this->picture);
    }
}
