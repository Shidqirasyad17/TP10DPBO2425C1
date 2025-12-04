<?php
require_once 'models/Siswa.php';

class SiswaViewModel
{
    private $siswa;

    public function __construct()
    {
        $this->siswa = new Siswa();
    }

    //mengambil ssemua data siswa
    public function getSiswaList()
    {
        return $this->siswa->getAll();
    }

    //mengambil data siswa berdasarkan id
    public function getSiswaById($id_siswa)
    {
        return $this->siswa->getById($id_siswa);
    }

    //menambahkan data siswa
    public function addSiswa($nama)
    {
        return $this->siswa->create($nama);
    }

    //mengupdate data siswa
    public function updateSiswa($id_siswa, $nama)
    {
        return $this->siswa->update($id_siswa, $nama);
    }

    //menghapus siswa
    public function deleteSiswa($id_siswa)
    {
        return $this->siswa->delete($id_siswa);
    }
}
