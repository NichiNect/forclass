<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $fillable = [
        'student_role', 'name', 'picture', 'description'
    ];

    public function getImageStudent()
    {
        return asset('storage/images/students/'.$this->picture);
    }
}
