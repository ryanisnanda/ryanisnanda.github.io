<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{

	protected $table = 'karyawan';
	protected $fillable = ['nama', 'alamat','no_ktp','sekolah','jurusan','tahun_masuk_sekolah','tahun_lulus_sekolah','perusahaan','jabatan','tahun_pengalaman','keterangan'];
}