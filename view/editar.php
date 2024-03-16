<!DOCTYPE HTML>
<html>
<?php include("head.php") ?>

<body>
    <?php include("menu.php") ?>
    <?php require_once("../controller/ControllerEditar.php");?>
    
      
    <div class="container">
    <form method="post" action="../controller/ControllerEditar.php" id="form" name="form" onsubmit="validar(document.form); return false;" class="form-group">
        <div class="p-3 mb-2 bg-primary-subtle text-primary-emphasis rounded">
            <h2 class="text-center">Editar Aluno</h2>
            <label for="nome" class="form-label fw-bold">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $editar->getNome(); ?>" required autofocus>
            <label for="endereco" class="form-label fw-bold">Endereço</label>
            <input type="text" class="form-control" id="endereco" name="endereco" value="<?php echo $editar->getEndereco(); ?>" required>
            <label for="escolaridade" class="form-label fw-bold">Escolaridade</label>
            <select class="form-select" aria-label="Escolaridade" id="escolaridade" name="escolaridade">
                <option selected disabled>Selecione</option>
                <option value="1" <?php echo ($editar->getEscolaridade() == 1) ? 'selected' : ''; ?>>Ensino Fundamental</option>
                <option value="2" <?php echo ($editar->getEscolaridade() == 2) ? 'selected' : ''; ?>>Ensino Médio</option>
                <option value="3" <?php echo ($editar->getEscolaridade() == 3) ? 'selected' : ''; ?>>Ensino Superior</option>
            </select>
            <label for="matriculado" class="form-label fw-bold">O Aluno está matriculado?</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="matriculado" id="matriculado_sim" value="1" <?php echo ($editar->getMatriculado() == 1) ? 'checked' : ''; ?>>
                <label class="form-check-label" for="matriculado_sim">
                    Sim
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="matriculado" id="matriculado_nao" value="0" <?php echo ($editar->getMatriculado() == 0) ? 'checked' : ''; ?>>
                <label class="form-check-label" for="matriculado_nao">
                    Não
                </label>
            </div>
            <input type="hidden" name="id" value="<?php echo $editar->getNome();?>">
            <button type="submit" class="btn btn-success">Editar</button>
        </div>
    </form>
</div>

    
</body>

</html>
