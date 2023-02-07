<?php
if (isset($_POST['input_hidden']) && isset($_POST['input_atualizar'])) {
    if (empty($_POST['input_atualizar'])) {
        header('location: index.php?Erro=UPDATE');
    } else {

        $Api = Api::PUT($_POST['input_atualizar'], $_POST['input_hidden']);
        if ($Api == true) {
            header('location:index.php?Update=OK');
        }
    }
}
