<?php 
require_once "Config/Database.php";

class Absensi {
    private $conn;
    private $table = "absensi";

    public function __construct(){
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    //mengambil semua data menggunakan join
    public function getAll(){
        $query = "
            SELECT 
                a.id_absen,
                a.tanggal,
                s.nama AS nama_siswa,
                k.nama_kelas,
                st.keterangan AS status_absen
            FROM absensi a
            JOIN siswa s ON a.id_siswa = s.id_siswa
            JOIN kelas k ON a.id_kelas = k.id_kelas
            JOIN status_absen st ON a.id_status = st.id_status
            ORDER BY a.id_absen DESC
        ";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //mengambil data berdasarkan id absen 
    public function getById($id){
        $query = "
            SELECT 
                a.*,
                s.nama AS nama_siswa,
                k.nama_kelas,
                st.keterangan AS status_absen
            FROM absensi a
            JOIN siswa s ON a.id_siswa = s.id_siswa
            JOIN kelas k ON a.id_kelas = k.id_kelas
            JOIN status_absen st ON a.id_status = st.id_status
            WHERE a.id_absen = :id
        ";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    //untuk menambah data pada tabel
    public function create($id_siswa, $id_kelas, $id_status, $tanggal){
        $query = "
            INSERT INTO {$this->table} (id_siswa, id_kelas, id_status, tanggal)
            VALUES (:id_siswa, :id_kelas, :id_status, :tanggal)
        ";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id_siswa", $id_siswa);
        $stmt->bindParam(":id_kelas", $id_kelas);
        $stmt->bindParam(":id_status", $id_status);
        $stmt->bindParam(":tanggal", $tanggal);

        return $stmt->execute();
    }

    //untuk update data pada tabel
    public function update($id_absen, $id_siswa, $id_kelas, $id_status, $tanggal){
        $query = "
            UPDATE {$this->table}
            SET id_siswa = :id_siswa,
                id_kelas = :id_kelas,
                id_status = :id_status,
                tanggal = :tanggal
            WHERE id_absen = :id_absen
        ";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id_absen", $id_absen);
        $stmt->bindParam(":id_siswa", $id_siswa);
        $stmt->bindParam(":id_kelas", $id_kelas);
        $stmt->bindParam(":id_status", $id_status);
        $stmt->bindParam(":tanggal", $tanggal);

        return $stmt->execute();
    }

   //untuk menghapus data pada tabel berdasarkan id
    public function delete($id_absen){
        $query = "DELETE FROM {$this->table} WHERE id_absen = :id_absen";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_absen', $id_absen);
        
        return $stmt->execute();
    }
}
?>
