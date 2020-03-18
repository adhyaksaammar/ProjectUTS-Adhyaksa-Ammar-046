<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table ='anggotas';
    protected $fillable = [
    		 'id',
    		 'nama',
    		 'nim',
    		 'fakultas',
    		 'jenis_kelamin',
    		 'tempat_lahir',
    		 'tanggal_lahir',
    		 'no_hp',
    		 'alamat',
    		 'status_pinjam'
    ];
}
