<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor = $_POST['valor'];
    $forma = $_POST['forma'];
    $parcelas = isset($_POST['parcelas']) ? $_POST['parcelas'] : 0;

    if ($forma === 'avista') {
        $total = $valor * 0.9; // 10% de desconto
        echo "<h1>Resumo do Pagamento</h1>";
        echo "Forma de pagamento: À Vista<br>";
        echo "Total com desconto: R$" . number_format($total, 2, ',', '.');
    } elseif ($forma === 'prazo') {
        if ($parcelas <= 3) {
            $total = $valor; // Sem juros
        } elseif ($parcelas <= 6) {
            $total = $valor * 1.1; // 10% de juros
        } else {
            $total = $valor * 1.2; // 20% de juros
        }

        $valor_parcela = $total / $parcelas;

        echo "<h1>Resumo do Pagamento</h1>";
        echo "Forma de pagamento: A Prazo<br>";
        echo "Número de parcelas: $parcelas<br>";
        echo "Total com juros: R$" . number_format($total, 2, ',', '.') . "<br>";
        echo "Valor de cada parcela: R$" . number_format($valor_parcela, 2, ',', '.');
    } else {
        echo "Forma de pagamento inválida.";
    }

    echo "<br><br><a href='index.php'>Voltar</a>";
} else {
    echo "Método de requisição inválido.";
}
?>
