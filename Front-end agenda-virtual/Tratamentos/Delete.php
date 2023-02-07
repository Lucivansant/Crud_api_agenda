<?php

if (isset($_GET['id'])) {
    Api::DELETE($_GET['id']);
    header('location:index.php?Deletar=OK');
}
