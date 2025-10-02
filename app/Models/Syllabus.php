<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Syllabus extends Model
{
      protected $fillable = ['course_id', 'outline'];

    public function course()
    {
        return $this->belongsTo(Course::class);  // One-to-One: syllabus belongs to one course
    }
}
