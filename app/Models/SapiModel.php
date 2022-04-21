<?php

namespace App\Models;

use CodeIgniter\Model;


class SapiModel extends Model
{
    protected $table = 'sapi';
    protected $useTimestamps = true;  
    // $db = \Config\Database::connect();


    public function get_sapi(){
        $query = $this->db->table('sapi')
        ->join('pemeriksaan', 'pemeriksaan.eartag=sapi.eartag')
        ->join('hospital_pen', 'hospital_pen.id_hospital_pen=pemeriksaan.id_hospital_pen')
        ->join('pegawai', 'pegawai.id_pegawai=pemeriksaan.id_pegawai')
        ->join('penyakit', 'penyakit.id_penyakit=pemeriksaan.id_penyakit')
        ->join('obat', 'obat.id_obat=pemeriksaan.id_obat')
        ->join('penentuan_kandang', 'penentuan_kandang.eartag=sapi.eartag')
        ->join('kandang_pen', 'kandang_pen.id_kandang_pen=penentuan_kandang.id_kandang_pen')
        ->get();
        return $query;
    }

   public function getDetail($eartag){
        $query = $this->db->table('sapi')
        ->join('pemeriksaan', 'pemeriksaan.eartag=sapi.eartag')
        ->join('hospital_pen', 'hospital_pen.id_hospital_pen=pemeriksaan.id_hospital_pen')
        ->join('pegawai', 'pegawai.id_pegawai=pemeriksaan.id_pegawai')
        ->join('penyakit', 'penyakit.id_penyakit=pemeriksaan.id_penyakit')
        ->join('obat', 'obat.id_obat=pemeriksaan.id_obat')
        ->join('penentuan_kandang', 'penentuan_kandang.eartag=sapi.eartag')
        ->join('kandang_pen', 'kandang_pen.id_kandang_pen=penentuan_kandang.id_kandang_pen')
        ->where('sapi.eartag', $eartag)
        ->get();
        return $query;
    }

    public function getKesehatan($eartag){
        $query = $this->db->table('sapi')
        ->join('pemeriksaan', 'pemeriksaan.eartag=sapi.eartag')
        ->join('hospital_pen', 'hospital_pen.id_hospital_pen=pemeriksaan.id_hospital_pen')
        ->join('pegawai', 'pegawai.id_pegawai=pemeriksaan.id_pegawai')
        ->join('penyakit', 'penyakit.id_penyakit=pemeriksaan.id_penyakit')
        ->join('obat', 'obat.id_obat=pemeriksaan.id_obat')
        ->join('penentuan_kandang', 'penentuan_kandang.eartag=sapi.eartag')
        ->join('kandang_pen', 'kandang_pen.id_kandang_pen=penentuan_kandang.id_kandang_pen')
        ->where('sapi.eartag', $eartag)
        ->get();
        return $query;
    }


    // public function search($keyword)
    // {
    //     // $builder = $this->table('sapi');
    //     // $builder->like('eartag', $keyword);
    //     // return $builder;

    //     return $this->table('sapi')->like('eartag', $keyword);
    // }
}
