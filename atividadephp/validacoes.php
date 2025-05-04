<?php

function validar_livro($livro) {
    // Verifica se título e autor não estão vazios
    if (empty($livro['titulo']) || empty($livro['autor'])) {
        return false;
    }
    
    // Verifica se o preço é numérico e >= 0.01
    if (!is_numeric($livro['preco']) || $livro['preco'] < 0.01) {
        return false;
    }
    
    // Verifica se a quantidade é inteira e > 0
    if ($livro['quantidade'] < 1) {
        return false;
    }
    
    return true;
}

function calcularValorTotalEstoque($livro) {
    return $livro['preco'] * $livro['quantidade'];
}
?>