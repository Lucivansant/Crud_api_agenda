<?php if (isset($_GET['Update']) && $_GET['Update'] == "OK") {
?>

    <p class="text-success"><b>Número atualizado com sucesso!!</b> </p>

<?php } ?>
<?php if (isset($_GET['Erro']) && $_GET['Erro'] == "UPDATE") {
?>

    <p class="text-danger"><b>Digite um valor para atualizar...</b> </p>

<?php } ?>
<?php if (isset($_GET['insert']) && $_GET['insert'] == "OK") {
?>

    <p class="text-success"><b>Cadastro realizado com sucesso!!</b> </p>

<?php } ?>
<?php if (isset($_GET['input']) && $_GET['input'] == "empty") {
?>

    <p class="text-danger"><b>Preencha todos os campos para cadastrar...</b> </p>

<?php } ?>
<?php if (isset($_GET['Deletar']) && $_GET['Deletar'] == "OK") {
?>

    <p class="text-success"><b>Número deletado com sucesso!!</b> </p>

<?php } ?>