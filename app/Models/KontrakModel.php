<?php

namespace App\Models;

use CodeIgniter\Model;

class KontrakModel extends Model
{
    protected $table = 'kontrak';
    protected $primaryKey = 'id';
    protected $allowedFields = ['pegawai_id', 'tanggal_mulai', 'tanggal_selesai'];
}
