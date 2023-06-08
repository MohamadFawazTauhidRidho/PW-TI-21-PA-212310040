<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'npm', 'jenis_kelamin', 'tanggal_lahir', 'alamat'];

    protected $dates = ['tanggal_lahir'];
}