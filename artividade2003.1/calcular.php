<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $lanche = $_POST['lanche'];
    $quantidade_lanche = $_POST['quantidade_lanche'];
    $bebida = $_POST['bebida'];
    $quantidade_bebida = $_POST['quantidade_bebida'];

    // Cálculo do valor total
    $total_lanche = $lanche * $quantidade_lanche;
    $total_bebida = $bebida * $quantidade_bebida;
    $total = $total_lanche + $total_bebida;

    echo "<h1>Resumo do Pedido</h1>";
    echo "<p>Nome: $nome</p>";
    echo "<p>Valor dos Lanches: R$" . number_format($total_lanche, 2, ',', '.') . "</p>";
    echo "<p>Valor das Bebidas: R$" . number_format($total_bebida, 2, ',', '.') . "</p>";
    echo "<p><strong>Valor Total: R$" . number_format($total, 2, ',', '.') . "</strong></p>";
    
    echo "<a href='index.php'>Fazer outro pedido</a>";
} else {
    echo "Método de requisição inválido.";
}
?>
