<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $table= 'years';

    protected $guard= [];

    protected $fillable = [
        'sekolah', // <-- TAMBAHKAN BARIS INI
        'jumlah',];
}
