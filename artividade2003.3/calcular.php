<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $produto = $_POST['produto'];
    $quantidade_produto = $_POST['quantidade_produto'];
    $acessorio = $_POST['acessorio'];
    $quantidade_acessorio = $_POST['quantidade_acessorio'];

    $total_produto = $produto * $quantidade_produto;
    $total_acessorio = $acessorio * $quantidade_acessorio;
    $total = $total_produto + $total_acessorio;

    echo "<h1>Resumo da Compra</h1>";
    echo "<p>Nome: $nome</p>";
    echo "<p>Valor das Roupas: R$" . number_format($total_produto, 2, ',', '.') . "</p>";
    echo "<p>Valor dos Acessórios: R$" . number_format($total_acessorio, 2, ',', '.') . "</p>";
    echo "<p><strong>Valor Total: R$" . number_format($total, 2, ',', '.') . "</strong></p>";

    echo "<br><br><a href='index.php'>Fazer outra compra</a>";
} else {
    echo "Método de requisição inválido.";
}
?>
