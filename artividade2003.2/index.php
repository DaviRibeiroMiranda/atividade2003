<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forma de Pagamento</title>
    <script>
        function toggleParcelas() {
            const forma = document.getElementById("forma").value;
            const parcelasField = document.getElementById("parcelasField");

            if (forma === "prazo") {
                parcelasField.style.display = "block";
            } else {
                parcelasField.style.display = "none";
            }
        }
    </script>
    <style>
        #parcelasField {
            display: none; /* Ocultar inicialmente */
        }
    </style>
</head>
<body>
    <h1>Calculadora de Pagamento</h1>
    <form action="calcular.php" method="POST">
        <label for="valor">Total da Compra (R$):</label>
        <input type="number" id="valor" name="valor" step="0.01" required><br><br>

        <label for="forma">Forma de Pagamento:</label>
        <select id="forma" name="forma" onchange="toggleParcelas()" required>
            <option value="avista">À Vista</option>
            <option value="prazo">A Prazo</option>
        </select><br><br>

        <div id="parcelasField">
            <label for="parcelas">Número de Parcelas:</label>
            <input type="number" id="parcelas" name="parcelas" min="1" required><br><br>
        </div>

        <button type="submit">Calcular</button>
    </form>
</body>
</html>
<!--
o godigo tem um puuco script por que eu achei mais facil fazer assim :)
--->