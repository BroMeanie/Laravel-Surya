<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    protected $table = 'cvs';

    protected $fillable = [
        'nama',
        'email',
        'telepon',
        'alamat',
        'pendidikan',
        'pengalaman',
        'keahlian',
        'deskripsi'
    ];
}
