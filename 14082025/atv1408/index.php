<?php

function carregarNoticias(string $arquivo): array {
    if (!verificarArquivo($arquivo)) {
        return [];
    }

    $noticias = file($arquivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    
    return $noticias !== false ? $noticias : [];
}

function obterNoticiaAleatoria(array $noticias): string {
    if (empty($noticias)) {
        return "Nenhuma notícia encontrada.";
    }

    $indiceAleatorio = array_rand($noticias);
    return $noticias[$indiceAleatorio];
}

function verificarArquivo(string $arquivo): bool {
    return file_exists($arquivo) && is_readable($arquivo);
}

$nomeArquivo = 'noticias.txt';

if (!file_exists($nomeArquivo)) {
    $conteudo = "Notícia 1: PHP é uma linguagem de programação web muito popular.\n";
    $conteudo .= "Notícia 2: O desenvolvimento web está em constante evolução.\n";
    $conteudo .= "Notícia 3: Frameworks modernos facilitam o desenvolvimento.";
    file_put_contents($nomeArquivo, $conteudo);
}

$noticias = carregarNoticias($nomeArquivo);

if (!empty($noticias)) {
    $noticiaSelecionada = obterNoticiaAleatoria($noticias);
    echo "Notícia do Dia: " . $noticiaSelecionada;
} else {
    echo "Não foi possível carregar as notícias. Verifique o arquivo '{$nomeArquivo}'.";
}

?>