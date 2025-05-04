<?php
// Inclui o arquivo com as funções de validação
require_once 'validacoes.php';

// Verifica se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Cria o array associativo com os dados do livro
    $livro = [
        'titulo' => $_POST['titulo'],
        'autor' => $_POST['autor'],
        'preco' => floatval($_POST['preco']),
        'quantidade' => intval($_POST['quantidade'])
    ];
    
    // Valida os dados do livro
    if (!validar_livro($livro)) {
        // Exibe mensagem de erro e link para voltar
        echo "<h2>Erro na validação dos dados:</h2>";
        echo "<ul>";
        if (empty($livro['titulo'])) echo "<li>Título não pode estar em branco</li>";
        if (empty($livro['autor'])) echo "<li>Autor não pode estar em branco</li>";
        if ($livro['preco'] < 0.01) echo "<li>Preço deve ser maior ou igual a R$ 0.01</li>";
        if ($livro['quantidade'] < 1) echo "<li>Quantidade deve ser maior que zero</li>";
        echo "</ul>";
        
        echo '<a href="index.php">Voltar ao formulário</a>';
        exit;
    }
    
    // Se chegou aqui, os dados são válidos
    // Calcula o valor total do estoque
    $valorTotal = calcularValorTotalEstoque($livro);
    
    // Exibe os resultados
    echo "<h2>Livro Cadastrado com Sucesso!</h2>";
    echo "<p> Título:</strong> " . htmlspecialchars($livro['titulo']) . "</p>";
    echo "<p> Autor:</strong> " . htmlspecialchars($livro['autor']) . "</p>";
    echo "<p> Preço Unitário: R$ " . number_format($livro['preco'], 2, ',', '.') . "</p>";
    echo "<p> Quantidade em Estoque: " . $livro['quantidade'] . "</p>";
    echo "<p> Valor Total em Estoque:R$ " . number_format($valorTotal, 2, ',', '.') . "</p>";
} else {
    exit;
}
?>