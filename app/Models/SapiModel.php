<?php

namespace App\Models;

use CodeIgniter\Model;


class SapiModel extends Model
{
    protected $table = 'sapi';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'bobot', 'sex', 'grade', 'umur', 'jenis_sapi', 'kedatangan', 'no_kandang_pen', 'no_hospital_pen', 'nama_penyakit',
        'gejala', 'pengobatan', 'tanggal_masuk', 'tanggal_keluar'
    ];
    // $db = \Config\Database::connect();


    public function get_sapi()
    {
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

    public function createSapi(
        $bobot,
        $sex,
        $grade,
        $umur,
        $jenis_sapi,
        $kedatangan,
        $no_kandang_pen,
        $no_hospital_pen,
        $nama_penyakit,
        $gejala,
        $pengobatan,
        $tanggal_masuk,
        $tanggal_keluar
    ) {
        $sql = "START TRANSACTION;
        INSERT INTO sapi VALUES( '$bobot', '$sex', '$grade', '$umur', '$jenis_sapi', '$kedatangan');
        INSERT INTO  VALUES( '$bobot', '$sex', '$grade', '$umur', '$jenis_sapi', '$kedatangan');
        INSERT INTO sapi VALUES( '$bobot', '$sex', '$grade', '$umur', '$jenis_sapi', '$kedatangan');
        INSERT INTO sapi VALUES( '$bobot', '$sex', '$grade', '$umur', '$jenis_sapi', '$kedatangan');COMMIT";
        $this->simpleQuery($sql);
        // $query = $this->db->table('sapi');
        // $query->insert([
        //     "bobot" => $this->request->getPost('bobot'),
        //     "sex" => $this->request->getPost('sex'),
        //     "grade" => $this->request->getPost('grade'),
        //     "umur" => url_title($this->request->getPost('umur'), '-', TRUE),
        //     "jenis_sapi" => $this->request->getPost('jenis_sapi'),
        //     "kedatangan" => $this->request->getPost('kedatangan'),
        //     "no_kandang_pen" => $this->request->getPost('no_kandang_pen'),
        //     "no_hospital_pen" => $this->request->getPost('no_hospital_pen'),
        //     "nama_penyakit" => $this->request->getPost('nama_penyakit'),
        //     "gejala" => $this->request->getPost('gejala'),
        //     "pengobatan" => $this->request->getPost('pengobatan'),
        //     "tanggal_masuk" => $this->request->getPost('tanggal_masuk'),
        //     "tanggal_keluar" => $this->request->getPost('tanggal_keluar')
        // ]);
    }
    public function getDetail($eartag)
    {
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

    public function getKesehatan($eartag)
    {
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


    public function search($keyword)
    {
        // $builder = $this->table('sapi');
        // $builder->like('eartag', $keyword);
        // return $builder;

        return $this->table('sapi')->like('eartag', $keyword);
    }
}
