<?php
include_once("templates/header.php");
?>

<div class="container" id="view-contact-container">
    <?php include_once("templates/backbtn.html.php") ?>

    <h1 id="main-title"><?= $contact["name"]; ?></h1>

    <p><strong>Telefone:</strong></p>
    <p><?= $contact["phone"]; ?></p>

    <p><strong>Observações:</strong></p>
    <p><?= $contact["observations"]; ?></p>
</div>

<?php
include_once("templates/footer.php");
?>