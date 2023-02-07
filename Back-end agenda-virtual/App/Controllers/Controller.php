<?php

class Controller_api
{
    private $conexao;

    public function __construct(Conexao $conexao)
    {
        $this->conexao = $conexao->Conectar();
    }

    public function Recuperar()
    {
        $query = "SELECT * FROM agenda ORDER BY id DESC";
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function Adicionar($nome, $email, $numero, $descri)
    {
        $query = "INSERT INTO agenda(agenda_nome, agenda_email, agenda_contato, agenda_text) VALUES (:nome, :email, :numero, :anotacao)";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':numero', $numero);
        $stmt->bindValue(':anotacao', $descri);

        $stmt->execute();
    }

    public function Atualizar($new_number, $id)
    {
        $query = "UPDATE agenda SET agenda_contato = :new_number WHERE id = :id ";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':new_number', $new_number);
        $stmt->bindValue(':id', $id);

        $stmt->execute();
    }

    public function Deletar($id)
    {
        $query = "DELETE FROM agenda WHERE id = :id";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
    }
}
