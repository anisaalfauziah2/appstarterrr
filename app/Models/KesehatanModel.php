<?php

namespace App\Models;

use CodeIgniter\Model;


class KesehatanModel extends Model
{
    protected $table = 'kesehatan';
    // protected $useTimestamps = true;
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    // protected $useSoftDeletes = false;
    protected $allowedFields = ['id', 'eartag', 'sex', 'kedatangan', 'gejala', 'no_kandang', 'no_hospital', 'penyakit', 'nama_obat', 'jenis_obat', 'tanggal_masuk', 'tanggal_keluar'];

    // $db = \Config\Database::connect();
    public function get_kesehatan()
    {
        $query = $this->db->table('kesehatan')
            ->join('pemeriksaan', 'pemeriksaan.id=kesehatan.id')
            ->join('medicalrecord', 'medicalrecord.id=kesehatan.id')

            ->get();
        return $query;
    }

    public function getDetail($id)
    {
        $query = $this->db->table('kesehatan')
            ->join('pemeriksaan', 'pemeriksaan.id=kesehatan.id')
            ->join('medicalrecord', 'medicalrecord.id=kesehatan.id')

            ->where('kesehatan.id', $id)
            ->get();
        return $query;
    }

    public function getEdit($id)
    {
        $query = $this->db->table('kesehatan')
            ->join('pemeriksaan', 'pemeriksaan.id=kesehatan.id')
            ->join('medicalrecord', 'medicalrecord.id=kesehatan.id')

            ->where('kesehatan.id', $id)
            ->get();
        return $query;
    }
}
