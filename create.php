<?php
include_once("templates/header.php");
?>

<div class="container">
    <?php include_once("templates/backbtn.html.php") ?>

    <h1 id="main-title">Criar contato</h1>

    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
        <input type="hidden" name="type" value="create">

        <div class="form-group">
            <label for="name">Nome do contato:</label>
            <input type="text" class="form-control" name="name" id="name" required>
        </div>

        <div class="form-group">
            <label for="phone">Telefone do contato:</label>
            <input type="text" class="form-control" name="phone" id="phone" required>
        </div>

        <div class="form-group">
            <label for="phone">Observações: </label>
            <textarea class="form-control" name="phone" id="phone" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>

</div>

<?php
include_once("templates/footer.php");
?>