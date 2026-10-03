<?php

class Student
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function all()
    {
        $result = $this->conn->query("SELECT * FROM frome ORDER BY id ASC");
        return $result;
    }

    public function findById($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM frome WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function create($name, $email, $phone)
    {
        $stmt = $this->conn->prepare("INSERT INTO frome (name, email, phone) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $phone);

        return $stmt->execute();
    }

    public function update($id, $name, $email, $phone)
    {
        $stmt = $this->conn->prepare("UPDATE frome SET name = ?, email = ?, phone = ? WHERE id = ?");
        $stmt->bind_param("sssi", $name, $email, $phone, $id);

        return $stmt->execute();
    }

    public function delete($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM frome WHERE id = ?");
        $stmt->bind_param("i", $id);

        return $stmt->execute();
    }
}
