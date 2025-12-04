<?php 
require_once "Config/Database.php";

class status_absen {
    private $conn;
    private $table = "status_absen";

    public function __construct(){
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    //mengambil semua data pada tabel
    public function getAll()
    {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //mengambil data pada tabel berdasarkan id
    public function getById($id_status)
    {
        $query = "SELECT * FROM " . $this->table . " WHERE id_status = :id_status";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_status', $id_status);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    //memasukan/menambahkan data pada tabel
    public function create($keterangan)
    {
        $query = "INSERT INTO " . $this->table . " (keterangan) VALUES (:keterangan)";
        $stmt = $this->conn->prepare($query);
        // Bind parameters
        $stmt->bindParam(':keterangan', $keterangan);
        return $stmt->execute();
    }

    //mengupdate data pada tabel
    public function update($id_status, $keterangan)
    {
        $query = "UPDATE " . $this->table . " SET keterangan = :keterangan WHERE id_status = :id_status";
        $stmt = $this->conn->prepare($query);
        // Bind parameters
        $stmt->bindParam(':id_status', $id_status);
        $stmt->bindParam(':keterangan', $keterangan);
        return $stmt->execute();
    }

    //menghapus data berdasarkan id pada tabel
    public function delete($id_status)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id_status = :id_status";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_status', $id_status);
        return $stmt->execute();
    }
}
?>