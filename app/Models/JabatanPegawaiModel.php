<?php

namespace App\Models;

use CodeIgniter\Model;

class JabatanPegawaiModel extends Model
{
    protected $table = 'jabatanpegawai';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_jabatan'];
}
