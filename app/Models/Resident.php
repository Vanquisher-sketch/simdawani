<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    protected $table= 'residents';

    protected $guard= [];

    protected $fillable = [
        'tanggal_lahir', // <-- TAMBAHKAN BARIS INI
        'gender',
        'agama',
        'status_pekerjaan',
        'status_pendidikan',
        'status_hubungan',
        'status_tinggal'];

}
