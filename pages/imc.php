<?php
$respondido = false;
$homem = false;
$mulher = false;
if (isset($_GET['peso']) || isset($_GET['altura']) || isset($_GET['sexo'])) {
    if (isset($_GET['peso'])) {
        $peso = $_GET['peso'];
    }
    if (isset($_GET['altura'])) {
        $altura = $_GET['altura'];
    }
    if (isset($_GET['peso']) && isset($_GET['altura']) && isset($_GET['sexo'])) {
        $imc = $peso / ($altura * $altura);

        if (isset($_GET['sexo'])) {
            if ($_GET['sexo'] == 'homem') {
                $homem = true;
                $pesoIdeal = (72.7 * $altura) - 58;
                $diferenca = $pesoIdeal - $peso;
            } else {
                $mulher = true;
                $pesoIdeal = (62.1 * $altura) - 44.7;
                $diferenca = $pesoIdeal - $peso;
            }
        }

        $respondido = true;
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/custom.css">
    <link rel="shortcut icon" href="../assets/img/person.ico" type="image/x-icon">
    <title>IMC</title>
</head>

<body>
    <header>
        <nav>
            <h1>MENU</h1>
            <div id="divNav1">
                <ul id="linksPages">
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="multa.php">Multa</a></li>
                    <li><a href="primos.php">Primos</a></li>
                    <li><a href="imc.php" class="active">IMC</a></li>
                    <li><a href="temperaturas.php">Temperaturas</a></li>
                </ul>
                <ul id="linksDev">
                    <li><a href="https://github.com/carlos-verdeiro" target="_blank"><?php include "../assets/img/github.svg" ?></a></li>
                    <li><a href="https://www.linkedin.com/in/carlos-daniel-verdeiro/" target="_blank"><?php include "../assets/img/linkedin.svg" ?></a></li>
                    <li><a href="https://carlos-verdeiro.github.io/" target="_blank"><?php include "../assets/img/web.svg" ?></a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="main">
        <section class="section">
            <h1 class="h1Title">Calcular IMC</h1>
            <form action="imc.php" method="get" class="form">
                <div class="inputContainer" id="iCDe">
                    <label>Sexo:</label>
                    <div class="dadDivRadio">
                        <div class="divRadio">
                            <input type="radio" name="sexo" id="homem" value="homem" <?php if ($homem) {
                                                                                            echo 'checked';
                                                                                        } ?>>
                            <label for="homem" class="labelRadio">Homem</label>
                        </div>
                        <div class="divRadio">
                            <input type="radio" name="sexo" id="mulher" value="mulher" <?php if ($mulher) {
                                                                                            echo 'checked';
                                                                                        } ?>>
                            <label for="mulher" class="labelRadio">Mulher</label>
                        </div>
                    </div>
                </div>
                <div class="inputContainer" id="iCPeso">
                    <label for="peso">Peso:</label>
                    <input placeholder="Kg" type="number" step="0.01" name="peso" id="peso" min="0.1 " value="<?php if (isset($peso)) {
                                                                                                                    echo $peso;
                                                                                                                } ?>" required>
                </div>
                <div class="inputContainer" id="iCAltura">
                    <label for="altura">Altura:</label>
                    <input placeholder="Metro" type="number" step="0.01" name="altura" id="altura" min="1" value="<?php if (isset($altura)) {
                                                                                                                        echo $altura;
                                                                                                                    } ?>" required>
                </div>
                <input type="submit" value="Calcular" class="submit">
            </form>
        </section>
        <?php
        if ($respondido) {


            echo '<section class="section">
            <h3 class="h3Res">
                ';
            switch ($imc) {
                case ($imc <= 18.5):
                    echo "Abaixo do peso!";
                    break;
                case ($imc >= 18.5 && $imc < 25):
                    echo "Peso ideal!";
                    break;
                case ($imc >= 25 && $imc < 30):
                    echo "Levemente acima do peso!";
                    break;
                case ($imc >= 30 && $imc < 35):
                    echo "Obesidade Grau 1!";
                    break;
                case ($imc >= 35 && $imc < 40):
                    echo "Obesidade Grau 2! (Severa)";
                    break;
                case ($imc >= 40):
                    echo "Obesidade Grau 3! (Mórbida)";
                    break;
            }
            echo '
            </h3>
            <h3 class="h3Res">IMC: ';
            if (isset($imc)) {
                echo number_format($imc, 2);
            }
            echo '</h3>
            <h3 class="h3Res">Ideal para ', $altura, ' metros: ';
            if (isset($pesoIdeal)) {
                echo number_format($pesoIdeal, 1) . ' Kg';
            }
            echo '</h3>
            <h3 class="h3Res">Ajuste necessário: ';
            if (isset($diferenca)) {
                echo number_format($diferenca, 1) . ' Kg';
            }
            echo '</h3>
        </section>';
        }
        ?>
    </main>
    <?php include_once "../templates/footer.php" ?>
</body>

</html>