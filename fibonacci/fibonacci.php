<?php
// Função para verificar se um número pertence à sequência de Fibonacci
function pertenceFibonacci($numero) {
    // Se o número é negativo
    if ($numero < 0) {
        return false;
    }

    // Inicializando os dois primeiros números da sequência de Fibonacci
    $a = 0;
    $b = 1;

    // Verifica se o número é 0 ou 1, que são os primeiros números da sequência
    if ($numero == $a || $numero == $b) {
        return true;
    }

    // Gera a sequência de Fibonacci até encontrar o número ou ultrapassar o número
    while ($b <= $numero) {
        $c = $a + $b;
        $a = $b;
        $b = $c;

        if ($b == $numero) {
            return true;
        }
    }

    // Se o número não foi encontrado na sequência, retorna false
    return false;
}

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém o número informado pelo usuário
    $numeroInformado = intval($_POST['numero']);

    // Verifica se o número pertence à sequência de Fibonacci
    if (pertenceFibonacci($numeroInformado)) {
        echo "<p>O número {$numeroInformado} pertence à sequência de Fibonacci.</p>";
    } else {
        echo "<p>O número {$numeroInformado} não pertence à sequência de Fibonacci.</p>";
    }

    // Link para voltar ao formulário
    echo '<a href="index.php">Voltar</a>';
} else {
    // Redireciona de volta para o formulário se o acesso não for POST
    header('Location: index.php');
    exit();
}
?>
