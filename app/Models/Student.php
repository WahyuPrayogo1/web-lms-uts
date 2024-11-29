<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students'; // Nama tabel

    protected $fillable = [
        'name',
        'nim',
        'email',
        'phone',
        'gender',
        'birth_date',
        'address',
        'department',
        'program',
        'photo', // Tambahkan photo di sini
    ];
}
