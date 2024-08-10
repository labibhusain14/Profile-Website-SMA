<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherAndStaff extends Model
{
    use HasFactory;

    protected $table = 'teacher_and_staffs';
    protected $primaryKey = 'id';

    // Mengambil data dari database
    protected $fillable = [
        'id',
        'ein',
        'name',
        'gender',
        'photo',
        'subject_id',
        'facebook',
        'instagram',
        'email',
    ];
}
