<!DOCTYPE HTML>
<html>
<?php include("head.php") ?>

<body>
    <?php include("menu.php") ?>
    <div class="container">
        <form method="post" action="../controller/ControllerCadastro.php" id="form" name="form"
            onsubmit="validar(document.form); return false;" class="form-group">

            <div class="p-3 mb-2 bg-primary-subtle text-primary-emphasis rounded">
                <h2 class="text-center">Formulário</h2>
                <label for="nome" class="form-label fw-bold">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome">
                <label for="endereco" class="form-label fw-bold">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco">
                <label for="escolaridade" class="form-label fw-bold">Escolaridade</label>
                <select class="form-select" aria-label="Escolaridade" id="escolaridade" name="escolaridade">
                    <option selected disabled>Selecione</option>
                    <option value="1">Ensino Fundamental</option>
                    <option value="2">Ensino Médio</option>
                    <option value="3">Ensino Superior</option>
                </select>
                <label for="matriculado" class="form-label fw-bold">O Aluno está matriculado?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="matriculado" id="matriculado_sim" value="1">
                    <label class="form-check-label" for="matriculado_sim">
                        Sim
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="matriculado" id="matriculado_nao" value="0"
                        checked>
                    <label class="form-check-label" for="matriculado_nao">
                        Não
                    </label>
                </div>
                <input type="submit" class="form-control btn-color" id="submit_button" value="Enviar">

            </div>
        </form>
    </div>

</body>

</html>
