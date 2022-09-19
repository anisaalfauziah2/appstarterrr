<?php

namespace App\Models;

use CodeIgniter\Model;


class PemeriksaanModel extends Model
{
    protected $table = 'pemeriksaan';
    // protected $useTimestamps = true;
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    // protected $useSoftDeletes = false;
    protected $allowedFields = ['id', 'eartag', 'bobot', 'sex', 'grade', 'umur', 'jenis_sapi', 'kedatangan', 'gejala', 'no_kandang', 'no_hospital', 'tanggal_masuk', 'tanggal_keluar'];

    // $db = \Config\Database::connect();

    public function get_pemeriksaan()
    {
        $query = $this->db->table('pemeriksaan')
            ->join('kesehatan', 'kesehatan.id=pemeriksaan.id')
            ->join('medicalrecord', 'medicalrecord.id=pemeriksaan.id')

            ->get();
        return $query;
    }

    public function getDetail($id)
    {
        $query = $this->db->table('pemeriksaan')
            ->join('kesehatan', 'kesehatan.id=pemeriksaan.id')
            ->join('medicalrecord', 'medicalrecord.id=pemeriksaan.id')

            ->where('pemeriksaan.id', $id)
            ->get();
        return $query;
    }

    public function getEdit($id)
    {
        $query = $this->db->table('pemeriksaan')
            ->join('kesehatan', 'kesehatan.id=pemeriksaan.id')
            ->join('medicalrecord', 'medicalrecord.id=pemeriksaan.id')

            ->where('pemeriksaan.id', $id)
            ->get();
        return $query;
    }
}
