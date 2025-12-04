<?php
require_once 'models/Kelas.php';

class KelasViewModel
{
    private $kelas;

    public function __construct()
    {
        $this->kelas = new Kelas();
    }

    //mengambil semua data kelas
    public function getKelasList()
    {
        return $this->kelas->getAll();
    }

    //mengambil data kelas berdasarkan id
    public function getKelasById($id_kelas)
    {
        return $this->kelas->getById($id_kelas);
    }

    //menambah data kelas
    public function addKelas($nama_Kelas)
    {
        return $this->kelas->create($nama_Kelas);
    }

    //mengubah/update data kelas
    public function updateKelas($id_kelas, $nama_Kelas)
    {
        return $this->kelas->update($id_kelas, $nama_Kelas);
    }

    //menghapus data kelas
    public function deleteKelas($id_kelas)
    {
        return $this->kelas->delete($id_kelas);
    }
}
