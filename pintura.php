<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Simples</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/Style.css">
</head>
<body>

<div class="container">
    <div class="row justify-content-center login">
        <div class="col-12 col-sm-6 col-md-4">
            <div class="card shadow">
                <div class="card-header bg-info">
                    <h4 class="text-center text-white">Calculadora Simples</h4>
                </div>
                <div class="card-body">
                    <form method="post">
                        <div class="form-group">
                            <label for="num1">Número 1:</label>
                            <input type="number" step="any" name="num1" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="operador">Operação:</label>
                            <select name="operador" class="form-control">
                                <option value="+">+</option>
                                <option value="-">-</option>
                                <option value="*">*</option>
                                <option value="/">/</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="num2">Número 2:</label>
                            <input type="number" step="any" name="num2" class="form-control" required>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" name="calcular" class="btn btn-primary">Calcular</button>
                        </div>
                    </form>

                    <?php
                    if (isset($_POST['calcular'])) {
                        $num1 = $_POST['num1'];
                        $num2 = $_POST['num2'];
                        $op = $_POST['operador'];
                        $resultado = 0;

                        switch ($op) {
                            case '+':
                                $resultado = $num1 + $num2;
                                break;
                            case '-':
                                $resultado = $num1 - $num2;
                                break;
                            case '*':
                                $resultado = $num1 * $num2;
                                break;
                            case '/':
                                if ($num2 != 0) {
                                    $resultado = $num1 / $num2;
                                } else {
                                    echo "<div class='alert alert-danger'>Erro: divisão por zero!</div>";
                                    exit;
                                }
                                break;
                            default:
                                echo "<div class='alert alert-danger'>Operação inválida.</div>";
                                exit;
                        }

                        echo "<div class='alert alert-success text-center'>";
                        echo "<strong>Resultado:</strong><br>";
                        echo "$num1 $op $num2 = $resultado";
                        echo "</div>";
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
