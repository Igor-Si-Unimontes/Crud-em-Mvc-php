<?php
require_once("banco.php");

class Cadastro extends Banco {

    private $nome;
    private $endereco;
    private $escolaridade;
    private $matriculado;
    private $flag;

    //Metodos Set
    //Metodos Set
public function setNome($string){
    $this->nome = $string;
}
public function setEndereco($string){
    $this->endereco = $string; // Corrigido de $this->autor para $this->endereco
}
public function setEscolaridade($int){
    $this->escolaridade = $int; // Corrigido de $this->quantidade para $this->escolaridade
}

    public function setMatriculado($valor) {
        if (is_bool($valor)) {
            $this->matriculado = $valor ? 1 : 0;
        } elseif (is_numeric($valor)) {
            if ($valor == 0 || $valor == 1) {
                $this->matriculado = (int)$valor;
            } else {
                throw new InvalidArgumentException('O valor de matriculado deve ser 0 ou 1.');
            }
        } else {
            throw new InvalidArgumentException('O valor de matriculado deve ser um booleano ou um inteiro (0 ou 1).');
        }
    }
    public function setFlag($string){
        $this->flag = $string;
    }
   
    //Metodos Get
    public function getNome(){
        return $this->nome;
    }
    public function getEndereco(){
        return $this->endereco;
    }
    public function getEscolaridade(){
        return $this->escolaridade;
    }
    public function getMatriculado(){
        return $this->matriculado;
    }
    public function getFlag(){
        return $this->flag;
    }
  
    public function incluir(){
        return $this->setAluno($this->getNome(), $this->getEndereco(), $this->getEscolaridade(), $this->getMatriculado());
    }
    
}
?>
