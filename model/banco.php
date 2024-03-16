<?php
require_once ("../init.php");

class Banco
{

    protected $mysqli;

    public function __construct()
    {
        $this->conexao();
    }

    private function conexao()
    {
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO, BD_PORTA);
    }

    public function setAluno($nome, $endereco, $escolaridade, $matriculado)
    {
        $stmt = $this->mysqli->prepare("INSERT INTO alunos (nome, endereco, escolaridade, matriculado) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssii", $nome, $endereco, $escolaridade, $matriculado); // Linha 22
        if ($stmt->execute() === TRUE) {
            return true;
        } else {
            return false;
        }
    }


    public function getAluno()
    {
        $array = array(); // Inicialize a variável $array
        $result = $this->mysqli->query("SELECT * FROM alunos");
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $array[] = $row;
        }
        return $array;


    }
    public function deleteAluno($id)
    {
        if ($this->mysqli->query("DELETE FROM `alunos` WHERE `nome` = '" . $id . "';") == TRUE) {
            return true;
        } else {
            return false;
        }

    }
    public function pesquisaAluno($id)
    {
        $result = $this->mysqli->query("SELECT * FROM alunos WHERE nome='$id'");
        return $result->fetch_array(MYSQLI_ASSOC);
    }
    
    public function updateAluno($nome, $endereco, $escolaridade, $matriculado, $id)
    {
        $stmt = $this->mysqli->prepare("UPDATE `alunos` SET `nome` = ?, `endereco`=?, `escolaridade`=?, `matriculado`=? WHERE `id` = ?");
        $stmt->bind_param("sssii", $nome, $endereco, $escolaridade, $matriculado, $id);
        if ($stmt->execute() == TRUE) {
            return true;
        } else {
            return false;
        }
    }

}
?>