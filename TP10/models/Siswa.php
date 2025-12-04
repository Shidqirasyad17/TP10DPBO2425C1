<?php 
require_once "Config/Database.php";

class Siswa {
    private $conn;
    private $table = "siswa";

    public function __construct(){
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    //untuk mengambil semua data pada tabel
    public function getAll()
    {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    //untuk mengambil data berdasarkan id pada tabel
    public function getById($id_siswa)
    {
        $query = "SELECT * FROM " . $this->table . " WHERE id_siswa = :id_siswa";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_siswa', $id_siswa);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    //untuk memasukan/menambah data pada tabel
    public function create($nama)
    {
        $query = "INSERT INTO " . $this->table . " (nama) VALUES (:nama)";
        $stmt = $this->conn->prepare($query);
        // Bind parameters
        $stmt->bindParam(':nama', $nama);
        return $stmt->execute();
    }

    //untuk update data pada tabel
    public function update($id_siswa, $nama)
    {
        $query = "UPDATE " . $this->table . " SET nama = :nama WHERE id_siswa = :id_siswa";
        $stmt = $this->conn->prepare($query);
        // Bind parameters
        $stmt->bindParam(':id_siswa', $id_siswa);
        $stmt->bindParam(':nama', $nama);
        return $stmt->execute();
    }

    //untuk menghapus data pada tabel berdasarkan id
    public function delete($id_siswa)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id_siswa = :id_siswa";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_siswa', $id_siswa);
        return $stmt->execute();
    }
}

?>