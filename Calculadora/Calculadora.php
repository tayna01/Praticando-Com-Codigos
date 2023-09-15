<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Simples</title>
    <link rel="stylesheet" type="text/css" href="Calculadora.css">
</head>
<div id=titulo>
    <h2>CALCULADORA SIMPLES</h2>
</div>

<body>
    <form method="POST">
        <div id=form>
            <input type="text" name="num1" placeholder="Digite o primeiro número" required>
            <select name="operacao">
                <option value="adicao">+</option>
                <option value="subtracao">-</option>
                <option value="multiplicacao">*</option>
                <option value="divisao">/</option>
            </select>
            <input type="text" name="num2" placeholder="Digite o segundo número" required>
            <input type="submit" value="Calcular">
            <button type="button" id="limparResultado">Limpar Resultado</button>

        </div>

    </form>
    <?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operacao = $_POST['operacao'];

        echo "<div id='resultado'>";

        if (!is_numeric($num1) || !is_numeric($num2)) {
            echo "Por favor, insira números válidos.";
        } else {
            switch ($operacao) {
                case 'adicao':
                    $resultado = $num1 + $num2;
                    break;
                case 'subtracao':
                    $resultado = $num1 - $num2;
                    break;
                case 'multiplicacao':
                    $resultado = $num1 * $num2;
                    break;
                case 'divisao':
                    if ($num2 == 0) {
                        echo "Erro: divisão por zero.";
                    } else {
                        $resultado = $num1 / $num2;
                    }
                    break;
                default:
                    echo "Operação inválida.";
                    break;
            }

            echo "Resultado: " . $resultado;
            echo "</div>";
        }
    }

    ?>
    <script>
        document.addEventListener("DOMContentLoaded", function () {

            var limparResultadoButton = document.getElementById("limparResultado");


            var resultadoElement = document.getElementById("resultado");


            limparResultadoButton.addEventListener("click", function () {

                resultadoElement.textContent = "";
            });
        });
    </script>

</body>

</html>