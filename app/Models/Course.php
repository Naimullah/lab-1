<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
     protected $fillable = ['department_id', 'code', 'title'];

    public function department()
    {
        return $this->belongsTo(Department::class);  // Many courses belong to one department
    }

    public function syllabus()
    {
        return $this->hasOne(Syllabus::class);  // One-to-One: course has one syllabus
    }

    public function students()
    {
        return $this->belongsToMany(Student::class, 'enrollments');  // Many-to-Many: course has many students
    }

}
