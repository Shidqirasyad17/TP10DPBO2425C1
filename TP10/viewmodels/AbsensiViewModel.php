<?php
require_once 'models/Absensi.php';

class AbsensiViewModel {
    private $absensi;

    public function __construct(){
        $this->absensi = new Absensi();
    }

    //mengambil semua data absen
    public function getAbsenList(){
        return $this->absensi->getAll();
    }

    //mengambil absen berdasarkan id
    public function getAbsenById($id){
        return $this->absensi->getById($id);
    }

    //tabah absensi
    public function addAbsen($id_siswa, $id_kelas, $id_status, $tanggal){
        if (empty($id_siswa) || empty($id_kelas) || empty($id_status) || empty($tanggal)) {
            return false;
        }

        return $this->absensi->create($id_siswa, $id_kelas, $id_status, $tanggal);
    }

    //update absensi
    public function updateAbsen($id_absen, $id_siswa, $id_kelas, $id_status, $tanggal){
        if (empty($id_absen) || empty($id_siswa) || empty($id_kelas) || empty($id_status) || empty($tanggal)) {
            return false;
        }

        return $this->absensi->update($id_absen, $id_siswa, $id_kelas, $id_status, $tanggal);
    }

    //hapus absensi
    public function deleteAbsen($id_absen){
        if (empty($id_absen)) {
            return false;
        }

        return $this->absensi->delete($id_absen);
    }
}
?>
