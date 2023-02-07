<?php
//Tratamento para inserir cadastro....
if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['numero']) && isset($_POST['descri'])) {
    if (empty($_POST['nome']) or empty($_POST['email']) or empty($_POST['numero']) or empty($_POST['descri'])) {
        header('location: index.php?input=empty');
    } else {
        Api::POST($_POST['nome'], $_POST['email'], $_POST['numero'], $_POST['descri']);
        header('location: index.php?insert=OK');
    }
}
