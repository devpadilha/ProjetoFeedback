<?php
namespace ProjetoFeedback\Models;

use ProjetoFeedback\Core\Connection;

class Feedback extends Connection {
    protected $table = 'feedbacks';

    public function getAll() {
        $sql = "SELECT * FROM {$this->table}";
        $stmt = $this->getInstance()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $sql = "SELECT * FROM {$this->table} WHERE id = :id";
        $stmt = $this->getInstance()->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function store($data) {
        $sql = "INSERT INTO {$this->table} (titulo, descricao, tipo, status) VALUES (:titulo, :descricao, :tipo, :status)";
        $stmt = $this->getInstance()->prepare($sql);
        $stmt->execute($data);
    }

    public function updateStatus($id, $status) {
        $sql = "UPDATE {$this->table} SET status = :status WHERE id = :id";
        $stmt = $this->getInstance()->prepare($sql);
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}