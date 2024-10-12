<?php
class Student_model {
    private $table = 'biodata_siswa';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllStudent() {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getStudentById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_siswa=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function addStudent($data) {
        $this->db->query('INSERT INTO ' . $this->table . ' (nama_siswa, kelas, jurusan, tanggal_lahir, tempat_lahir, agama, alamat) VALUES (:name, :class, :major, :birth_date, :birthplace, :religion, :address)');
        $this->db->bind('name', $data['nama_siswa']);
        $this->db->bind('class', $data['kelas']);
        $this->db->bind('major', $data['jurusan']);
        $this->db->bind('birth_date', $data['tanggal_lahir']);
        $this->db->bind('birthplace', $data['tempat_lahir']);
        $this->db->bind('religion', $data['agama']);
        $this->db->bind('address', $data['alamat']);
        $this->db->execute();
        //Line di bawah akan menghasilkan angka 1
        return $this->db->countingRow();
    }

    public function deleteStudent($id) {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id_siswa=:id');
        $this->db->bind('id', $id);
        $this->db->execute();
        //Line di bawah akan menghasilkan angka 1
        return $this->db->countingRow();
    }

    public function editStudent($data) {
        $this->db->query('UPDATE ' . $this->table . ' SET nama_siswa = :name, kelas = :class, jurusan = :major, tanggal_lahir = :birth_date, tempat_lahir = :birthplace, agama = :religion, alamat = :address WHERE id_siswa = :id');
        $this->db->bind('name', $data['nama_siswa']);
        $this->db->bind('class', $data['kelas']);
        $this->db->bind('major', $data['jurusan']);
        $this->db->bind('birth_date', $data['tanggal_lahir']);
        $this->db->bind('birthplace', $data['tempat_lahir']);
        $this->db->bind('religion', $data['agama']);
        $this->db->bind('address', $data['alamat']);
        $this->db->bind('id', $data['id_siswa']);
        $this->db->execute();
        //Line di bawah akan menghasilkan angka 1
        return $this->db->countingRow();
    }

    public function searchStudentData() {
        $keyword = $_POST['keyword'];
        $query = 'SELECT * FROM biodata_siswa WHERE nama_siswa LIKE :keyword';
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}