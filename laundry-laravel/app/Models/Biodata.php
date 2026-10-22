<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    protected $table = 'biodata';

    protected $primaryKey = 'no';

    public $timestamps = false;

    protected $fillable = [
        'nama',
        'no_telepon',
        'alamat',
        'catatan_khusus',
    ];
}