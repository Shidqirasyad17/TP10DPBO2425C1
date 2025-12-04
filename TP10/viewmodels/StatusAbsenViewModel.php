<?php
require_once 'models/status_Absen.php';

class StatusAbsenViewModel
{
    private $status_absen;

    public function __construct()
    {
        $this->status_absen = new Status_Absen();
    }

    //mengambil semua data status absen
    public function getStatusList()
    {
        return $this->status_absen->getAll();
    }

    //mengambil status berdasarkan id
    public function getStatusById($id)
    {
        return $this->status_absen->getById($id);
    }

   //tambah status absensi
    public function addStatus($keterangan)
    {
        return $this->status_absen->create($keterangan);
    }
    //update status absensi
    public function updateStatus($id, $keterangan)
    {
        return $this->status_absen->update($id, $keterangan);
    }
    //hapus status absensi
    public function deleteStatus($id)
    {
        return $this->status_absen->delete($id);
    }
}
?>
