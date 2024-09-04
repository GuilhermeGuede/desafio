<?php
// Função para contar a ocorrência da letra 'a' em uma string
function contarOcorrenciasA($string) {
    // Converte a string para minúsculas para contar tanto 'a' quanto 'A'
    $string = strtolower($string);

    // Conta a quantidade de ocorrências da letra 'a'
    $contagem = substr_count($string, 'a');

    return $contagem;
}

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém a string informada pelo usuário
    $stringInformada = $_POST['string'];

    // Conta as ocorrências da letra 'a'
    $ocorrencias = contarOcorrenciasA($stringInformada);

    // Exibe o resultado
    echo "<p>A letra 'a' aparece {$ocorrencias} vezes na string fornecida.</p>";
    
    // Link para voltar ao formulário
    echo '<a href="index.php">Voltar</a>';
} else {
    // Redireciona de volta para o formulário se o acesso não for POST
    header('Location: index.php');
    exit();
}
?>
