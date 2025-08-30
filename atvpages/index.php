<?php

$arquivo = 'noticias.txt';

function verificarArquivo($arquivo)
{
    return file_exists($arquivo);
}

function carregarNoticias($arquivo)
{
    if (verificarArquivo($arquivo)) {
        $noticias = file($arquivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        return $noticias;
    }
    return [];
}

function obterNoticiaAleatoria($noticias)
{
    if (!empty($noticias)) {
        $indiceAleatorio = array_rand($noticias);
        return $noticias[$indiceAleatorio];
    }
    return "Nenhuma notícia encontrada. Por favor, verifique se o arquivo foi criado corretamente.";
}

if (!verificarArquivo($arquivo)) {
    $conteudoNoticias = "Notícia 1: PHP é uma linguagem de programação web muito popular.\n"
        . "Notícia 2: O desenvolvimento web está em constante evolução.\n"
        . "Notícia 3: Frameworks modernos facilitam o desenvolvimento.";
    file_put_contents($arquivo, $conteudoNoticias);
}

$noticias = carregarNoticias($arquivo);
$noticia = obterNoticiaAleatoria($noticias);

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notícia Aleatória</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <h1>Sua Notícia do Dia</h1>
        <p><?php echo $noticia; ?></p>
    </div>
</body>
</html>