<?php
require_once './Api/Api.php';
require_once './Tratamentos/Post.php';
require_once './Tratamentos/Get.php';
require_once './Tratamentos/Update.php';
require_once './Tratamentos/Delete.php';



?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agenda virtual</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="./Config_view/style.css" rel="stylesheet">

    <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
</head>

<body style="font-family: 'Montserrat', sans-serif;">
    <header>
        <div class="container">
            <h5 style="font-family: 'Montserrat', sans-serif;" id="logo"> <i class="fa-solid fa-book"></i> App agenda virtual</h5>
        </div>
    </header>
    <section id="sec-geral" class="container">
        <div class="row" id="painel">
            <div class="col-lg-5">
                <h2>Adicione um novo contato</h2>
                <form method="post" action="index.php">
                    <div class="row">
                        <div class="col-lg-4">
                            <input id="input" class="form-control" type="text" name="nome" placeholder="Nome">
                        </div>
                        <div class="col-lg-4">
                            <input id="input" class="form-control" type="text" name="email" placeholder="E-mail">
                        </div>
                        <div class="col-lg-4">
                            <input id="input" class="form-control" type="text" name="numero" placeholder="Número de contato">
                        </div>
                        <div class="col-lg-12">
                            <textarea id="input" class="form-control" rows="5" name="descri" cols="" placeholder="Anotação"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-dark">Cadastrtar</button>
                </form>
                <?php require_once './Tratamentos/Feedbacks.php' ?>

                <p><i class="fa-brands fa-github"></i> <a href="https://github.com/Lucivansant">Perfil no GitHub</a></p>
                <p><i class="fa-brands fa-linkedin"></i><a href="#">Perfil no Linkedin</a></p>
            </div>
            <div class="col-lg-7">

                <div id="painel-card">
                    <?php foreach ($Json_decode as $Key => $Valor) {
                    ?>
                        <div id="card_">
                            <i onclick="Deletar(<?php echo $Valor->id ?>)" id="btn-delete" class="fa-solid fa-trash"></i>
                            <div id="content-card">
                                <label>Nome:</label>
                                <h5><?php echo $Valor->agenda_nome ?></h5>
                                <label>E-mail</label>
                                <h5><?php echo $Valor->agenda_email ?></h5>
                                <label>Telefone:</label>
                                <h5 id="num_<?php echo $Valor->id ?>">
                                    <i id="btn-atualizar" class="fa-solid fa-pen" onclick="Atualizar(<?php echo $Valor->id ?>,  '<?php echo $Valor->agenda_contato ?>')"></i>

                                    <?php echo $Valor->agenda_contato ?>
                                </h5>
                            </div>
                            <hr>
                            <h4>Anotação:</h4>
                            <p><?php echo $Valor->agenda_text ?></p>
                        </div>
                    <?php }  ?>

                </div>
            </div>
        </div>

    </section>

    <script src="./Config_view/javascript.js"></script>
    <script src="https://kit.fontawesome.com/0a2ff8b21c.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>