<?php require_once 'config.php' ?>


<?php
class Database extends Config
{
    public function fetch($id = 0)
    {
        $sql = 'SELECT * FROM users';
        if ($id != 0) {
            $sql .= ' WHERE id = :id';
        }
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
	    $rows = $stmt->fetchAll();
	    return $rows;
    }
}
