<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Student extends Model
{
    use HasFactory;

    
    public function class()
    {
        return $this->belongsTo(classRoom::class);

    }
    

    public function eskuls()
    {
        return $this->belongsToMany(eskul::class, 'eskul_siswa', 'student_id', 'eskul_id');
    }
    
    
}
