<?php
$nomecliente = 'Davi Ferreira Arantes';
$emailcliente = 'davi@davi';
$telcliente = '(11)1234-5678';
$cpfcliente = '12345678901';
$article = fopen('article.txt', 'r');
if ($article) {
    $conteudo = fread($article, filesize('article.txt'));
    fclose($article);

    $conteudo = str_replace('nomecliente', $nomecliente, $conteudo);
    $conteudo = str_replace('telcliente', $telcliente, $conteudo);
    $conteudo = str_replace('emailcliente', $emailcliente, $conteudo);
    $conteudo = str_replace('cpfcliente', $cpfcliente, $conteudo);
    
    $art = fopen('article.html', 'w');
    if ($art) {
        fwrite($art, $conteudo);
        fclose($art);
    } else {
        echo "Não é possivel criar o arquivo 'article.html'.";
    }
} else {
    echo "Não é possivel ler o arquivo 'article.txt'.";
}

header('Location: article.html');
?>
