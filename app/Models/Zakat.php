<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zakat extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'nominal', 'kelas', 'jenis_kelamin', 'id'];
}
