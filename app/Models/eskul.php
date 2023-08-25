<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eskul extends Model
{
    use HasFactory;

    public function students()
    {
        return $this->belongsTo(student::class, 'eskul_siswa', 'eskul_id', 'student_id');
    }
}
