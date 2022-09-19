<?php

namespace App\Models;

use CodeIgniter\Model;


class SapiModel extends Model
{
    protected $table = 'medicalrecord';
    // protected $useTimestamps = true;
    protected $returnType = 'object';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['id', 'eartag', 'gejala', 'grade'];

    // $db = \Config\Database::connect();


    public function get_sapi()
    {
        $query = $this->db->table('medicalrecord')
            ->join('pemeriksaan', 'pemeriksaan.id=medicalrecord.id')
            ->join('kesehatan', 'kesehatan.id=medicalrecord.id')

            ->get();
        return $query;
    }

    public function getDetail($id)
    {
        $query = $this->db->table('medicalrecord')
            ->join('pemeriksaan', 'pemeriksaan.id=medicalrecord.id')
            // ->join('kesehatan', 'kesehatan.id=kesehatan.id')
            ->where('medicalrecord.id', $id)
            ->get();
        return $query;
    }

    public function getKesehatan($id)
    {
        $query = $this->db->table('medicalrecord')
            ->join('pemeriksaan', 'pemeriksaan.id=medicalrecord.id')
            ->join('kesehatan', 'kesehatan.id=medicalrecord.id')
            ->where('medicalrecord.id', $id)
            ->get();
        return $query;
    }
}
