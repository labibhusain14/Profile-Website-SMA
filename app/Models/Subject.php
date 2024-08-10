<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    // Mengambil data dari database
    protected $fillable = [
        'id',
        'name',
    ];
}
