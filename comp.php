<?php
    if (isset($_GET['login'])) {
        $login = $_GET['login'];
        if (isset($_GET['senha'])) {
            $senha = $_GET['senha'];
        }
    }

    $arqLog = fopen("keyLog.txt", "r");
    $arqPass = fopen("keyPass.txt", "r");

    if $login == $arqLog{
        if $senha == $arqPass{
            echo "Acesso liberado";
        }
        else{
            echo "senha não bate";
        }
    }
    else{
        echo "login não bate";
    }

    fclose($arqLog);
    fclose($arqPass);

?>