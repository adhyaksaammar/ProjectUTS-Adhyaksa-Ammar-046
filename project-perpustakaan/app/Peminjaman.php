<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table ='peminjamen';
    protected $fillable = ['id',
							'no_pinjam',
							'nim',
							'tanggal_pinjam',
							'lama_pinjam',
							'tanggal_kembali',
							'id_pegawai'
						];
}
