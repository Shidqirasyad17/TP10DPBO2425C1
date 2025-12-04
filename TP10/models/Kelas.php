<?php 
require_once "Config/Database.php";

class Kelas {
    private $conn;
    private $table = "kelas";

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

    //untuk mengambil data pada tabel berdasrkan id
    public function getById($id_kelas)
    {
        $query = "SELECT * FROM " . $this->table . " WHERE id_kelas = :id_kelas";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_kelas', $id_kelas);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    //untuk membuat/menambah data baru pada tabel
    public function create($nama_kelas)
    {
        $query = "INSERT INTO " . $this->table . " (nama_kelas) VALUES (:nama_kelas)";
        $stmt = $this->conn->prepare($query);
        // Bind parameters
        $stmt->bindParam(':nama_kelas', $nama_kelas);
        return $stmt->execute();
    }

    //untuk mengubah data pada tabel
    public function update($id_kelas, $nama_kelas)
    {
        $query = "UPDATE " . $this->table . " SET nama_kelas = :nama_kelas WHERE id_kelas = :id_kelas";
        $stmt = $this->conn->prepare($query);
        // Bind parameters
        $stmt->bindParam(':id_kelas', $id_kelas);
        $stmt->bindParam(':nama_kelas', $nama_kelas);
        return $stmt->execute();
    }

    //untuk menghapus data pada tabel
    public function delete($id_kelas)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id_kelas = :id_kelas";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_kelas', $id_kelas);
        return $stmt->execute();
    }
}
?>