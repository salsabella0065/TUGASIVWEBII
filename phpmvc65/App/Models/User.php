<?php

class Users
{
   private $db;

   public function __construct($dbConnection)
   {
      $this->db = $dbConnection;
   }

   public function getUserById($id)
   {
      $stmt = $this->db->prepare("SELECT * FROM users WHERE id = :id");
      $stmt->bindParam(':id', $id);
      $stmt->execute();
      return $stmt->fetch(PDO::FETCH_ASSOC);
   }

   public function getAllUsers()
   {
      $stmt = $this->db->query("SELECT * FROM users");
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
   }

   public function createUser($nama, $email)
   {
      $stmt = $this->db->prepare("INSERT INTO users (nama, email) VALUES (:nama, :email)");
      $stmt->bindParam(':nama', $nama);
      $stmt->bindParam(':email', $email);
      $stmt->execute();
   }
   public function deleteUser($id)
{
    $stmt = $this->db->prepare("DELETE FROM users WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}
public function updateUser($id, $nama, $email)
{
    $stmt = $this->db->prepare("UPDATE users SET nama = :nama, email = :email WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nama', $nama);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
}
}
