<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramStudi extends Model
{
    use HasFactory;

    protected $table = 'program_studi';

    protected $fillable = [
        'fakultas_id',
        'kode_program_studi',
        'nama_program_studi',
        'tanggal_berdiri',
        'gelar',
    ];
}
