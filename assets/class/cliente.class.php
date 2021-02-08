<?php
class Cliente
{
    private $pdo;
    private $id;
    private $nome;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }


    public function getId()
    {
        return $this->id;
    }
    public function setId($i)
    {
        $this->id = $i;
    }

    public function getDescicao()
    {
        return $this->nome;
    }
    public function setDescicao($n)
    {
        $this->nome = $n;
    }


    public function carregaTable()
    {
        $sql = "SELECT * FROM cliente ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return $stmt->fetchAll();
        } else {
            return array();
        }
    }
}
