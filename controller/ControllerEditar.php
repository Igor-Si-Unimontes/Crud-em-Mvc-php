<?php
require_once("../model/banco.php");

class editarController {

    private $editar;
    private $nome;
    private $endereco;
    private $escolaridade;
    private $matriculado;
    private $id;

    public function __construct($id){
        $this->id = $id; // Salva o ID do aluno
        $this->editar = new Banco();
        $this->criarFormulario($id);
    }

    private function criarFormulario($id){
        $row = $this->editar->pesquisaAluno($id);
        if ($row !== null) {
            $this->nome = isset($row['nome']) ? $row['nome'] : '';
            $this->endereco = isset($row['endereco']) ? $row['endereco'] : '';
            $this->escolaridade = isset($row['escolaridade']) ? $row['escolaridade'] : '';
            $this->matriculado = isset($row['matriculado']) ? $row['matriculado'] : '';
        } else {
            echo "Nenhum aluno encontrado para o ID especificado.";
        }
    }
    
    public function editarFormulario($nome,$endereco,$escolaridade,$matriculado,$id){
        if($this->editar->updateAluno($nome,$endereco,$escolaridade,$matriculado,$id) == TRUE){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/index.php'</script>";
        } else {
            echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }        
    }
    
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
    
    public function getId(){
        return $this->id;
    }
}

$id = filter_input(INPUT_GET, 'id');
$editar = new editarController($id);

if(isset($_POST['submit'])){
    $editar->editarFormulario($_POST['nome'],$_POST['endereco'],$_POST['escolaridade'],$_POST['matriculado'],$id);
}
?>