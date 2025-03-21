<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Roupas - Pedido</title>
</head>
<body>
    <h1>Loja de Roupas</h1>
    <form action="calcular.php" method="POST">
        <label for="nome">Seu nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <h3>Escolha uma roupa:</h3>
        <select name="produto" required>
            <option value="25">Camiseta (R$25,00)</option>
            <option value="50">Calça (R$50,00)</option>
            <option value="100">Jaqueta (R$100,00)</option>
            <option value="150">Tênis (R$150,00)</option>
            <option value="20">Boné (R$20,00)</option>
        </select><br><br>

        <label for="quantidade_produto">Quantidade de peças:</label>
        <input type="number" id="quantidade_produto" name="quantidade_produto" min="1" required><br><br>

        <h3>Escolha um acessório (opcional):</h3>
        <select name="acessorio">
            <option value="0">Nenhum</option>
            <option value="15">Cinto (R$15,00)</option>
            <option value="10">Meias (R$10,00)</option>
            <option value="50">Bolsa (R$50,00)</option>
        </select><br><br>

        <label for="quantidade_acessorio">Quantidade de acessórios:</label>
        <input type="number" id="quantidade_acessorio" name="quantidade_acessorio" min="0" required><br><br>

        <button type="submit">Finalizar Compra</button>
    </form>
</body>
</html>
