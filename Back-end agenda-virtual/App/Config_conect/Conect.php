<?php

class Conexao
{
    private $db = "mysql:host=127.0.0.1; dbname=api_agenda";
    private $user = "root";
    private $password = "3205741";

    public function Conectar()
    {
        try {
            $pdo = new PDO($this->db, $this->user, $this->password);
            return $pdo;
        } catch (PDOException $e) {
            echo "Error !!" . $e->getMessage();
        }
    }
}
