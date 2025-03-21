<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lanchonete - Pedido</title>
</head>
<body>
    <h1>lanchonete</h1>
    <form action="calcular.php" method="POST">
        <label for="nome">Seu nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <h3>Escolha um lanche:</h3>
        <select name="lanche" required>
            <option value="6">X Burguer (R$6,00)</option>
            <option value="8">X Salada (R$8,00)</option>
            <option value="10">X Bacon (R$10,00)</option>
            <option value="12">X Tudo (R$12,00)</option>
            <option value="15">X Duplo (R$15,00)</option>
        </select><br><br>

        <label for="quantidade_lanche">Quantidade de lanches:</label>
        <input type="number" id="quantidade_lanche" name="quantidade_lanche" min="1" required><br><br>

        <h3>Escolha uma bebida:</h3>
        <select name="bebida" required>
            <option value="2">Água (R$2,00)</option>
            <option value="5">Suco (R$5,00)</option>
            <option value="3">Lata (R$3,00)</option>
            <option value="5">600 ml (R$5,00)</option>
            <option value="8">2 Litros (R$8,00)</option>
        </select><br><br>

        <label for="quantidade_bebida">Quantidade de bebidas:</label>
        <input type="number" id="quantidade_bebida" name="quantidade_bebida" min="1" required><br><br>

        <button type="submit">Finalizar Pedido</button>
    </form>
</body>
</html>
