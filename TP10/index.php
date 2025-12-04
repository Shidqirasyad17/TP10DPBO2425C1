<?php
require_once 'viewmodels/SiswaViewModel.php';
require_once 'viewmodels/KelasViewModel.php';
require_once 'viewmodels/StatusAbsenViewModel.php';
require_once 'viewmodels/AbsensiViewModel.php';

$entity = isset($_GET['entity']) ? $_GET['entity'] : 'siswa';
$action = isset($_GET['action']) ? $_GET['action'] : 'list';


//siswa
if ($entity === 'siswa') {

    $siswaVM = new SiswaViewModel();

    switch ($action) {
        case 'list':
            $siswaList = $siswaVM->getSiswaList();
            require 'views/siswa_list.php';
            break;

        case 'add':
            require 'views/siswa_form.php';
            break;

        case 'edit':
            $id = $_GET['id'];
            $siswa = $siswaVM->getSiswaById($id);
            require 'views/siswa_form.php';
            break;

        case 'save':
            $nama = $_POST['nama'];
            $siswaVM->addSiswa($nama);
            header("Location: index.php?entity=siswa&action=list");
            break;

        case 'update':
            $id = $_GET['id'];
            $nama = $_POST['nama'];
            $siswaVM->updateSiswa($id, $nama);
            header("Location: index.php?entity=siswa&action=list");
            break;

        case 'delete':
            $id = $_GET['id'];
            $siswaVM->deleteSiswa($id);
            header("Location: index.php?entity=siswa&action=list");
            break;

        default:
            echo "Invalid action.";
            break;
    }

    exit;
}

//kelas
if ($entity === 'kelas') {

    $kelasVM = new KelasViewModel();

    switch ($action) {
        case 'list':
            $kelasList = $kelasVM->getKelasList();
            require 'views/kelas_list.php';
            break;

        case 'add':
            require 'views/kelas_form.php';
            break;

        case 'edit':
            $id = $_GET['id'];
            $kelas = $kelasVM->getKelasById($id);
            require 'views/kelas_form.php';
            break;

        case 'save':
            $nama_kelas = $_POST['nama_kelas'];
            $kelasVM->addKelas($nama_kelas);
            header("Location: index.php?entity=kelas&action=list");
            break;

        case 'update':
            $id = $_GET['id'];
            $nama_kelas = $_POST['nama_kelas'];
            $kelasVM->updateKelas($id, $nama_kelas);
            header("Location: index.php?entity=kelas&action=list");
            break;

        case 'delete':
            $id = $_GET['id'];
            $kelasVM->deleteKelas($id);
            header("Location: index.php?entity=kelas&action=list");
            break;

        default:
            echo "Invalid action.";
            break;
    }

    exit;
}

//status absen
if ($entity === 'status') {

    $statusVM = new StatusAbsenViewModel();

    switch ($action) {
        case 'list':
            $statusList = $statusVM->getStatusList();
            require 'views/status_list.php';
            break;

        case 'add':
            require 'views/status_form.php';
            break;

        case 'edit':
            $id = $_GET['id'];
            $status = $statusVM->getStatusById($id);
            require 'views/status_form.php';
            break;

        case 'save':
            $keterangan = $_POST['keterangan'];
            $statusVM->addStatus($keterangan);
            header("Location: index.php?entity=status&action=list");
            break;

        case 'update':
            $id = $_GET['id'];
            $keterangan = $_POST['keterangan'];
            $statusVM->updateStatus($id, $keterangan);
            header("Location: index.php?entity=status&action=list");
            break;

        case 'delete':
            $id = $_GET['id'];
            $statusVM->deleteStatus($id);
            header("Location: index.php?entity=status&action=list");
            break;

        default:
            echo "Invalid action.";
            break;
    }

    exit;
}

//absensi
if ($entity === 'absensi') {

    $absensiVM = new AbsensiViewModel();


    $siswaVM   = new SiswaViewModel();       
    $statusVM  = new StatusAbsenViewModel();  
    $kelasVM   = new KelasViewModel();        

    switch ($action) {

        case 'list':
            $absensiList = $absensiVM->getAbsenList();
            require 'views/absensi_list.php';
            break;

        case 'add':
            $siswaList  = $siswaVM->getSiswaList();
            $statusList = $statusVM->getStatusList();
            $kelasList  = $kelasVM->getKelasList();

            require 'views/absensi_form.php';
            break;

        case 'edit':
            $id = $_GET['id'];
            $absen = $absensiVM->getAbsenById($id);
            $siswaList  = $siswaVM->getSiswaList();
            $statusList = $statusVM->getStatusList();
            $kelasList  = $kelasVM->getKelasList();

            require 'views/absensi_form.php';
            break;

        case 'save':
            $absensiVM->addAbsen(
                $_POST['id_siswa'],
                $_POST['id_kelas'],
                $_POST['id_status'],
                $_POST['tanggal']
            );
            header("Location: index.php?entity=absensi&action=list");
            break;

        case 'update':
            $id = $_GET['id'];
            $absensiVM->updateAbsen(
                $id,
                $_POST['id_siswa'],
                $_POST['id_kelas'],
                $_POST['id_status'],
                $_POST['tanggal']
            );
            header("Location: index.php?entity=absensi&action=list");
            break;

        case 'delete':
            $id = $_GET['id'];
            $absensiVM->deleteAbsen($id);
            header("Location: index.php?entity=absensi&action=list");
            break;

        default:
            echo "Invalid action.";
    }

    exit;
}

echo "Invalid entity.";
