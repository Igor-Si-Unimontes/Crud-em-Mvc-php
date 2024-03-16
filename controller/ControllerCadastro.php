<?php
require_once("../model/cadastroAluno.php");
class cadastroController{

    private $cadastro;

    public function __construct(){
        $this->cadastro = new Cadastro();
        $this->incluir();
    }

    private function incluir(){
        $this->cadastro->setNome($_POST['nome']);
        $this->cadastro->setEndereco($_POST['endereco']);
        $this->cadastro->setEscolaridade($_POST['escolaridade']);
        $this->cadastro->setMatriculado($_POST['matriculado']);
        $result = $this->cadastro->incluir();
        if($result >= 1){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/cadastro.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!, verifique se o aluno não está duplicado');history.back()</script>";
        }
    }
}
new cadastroController();
