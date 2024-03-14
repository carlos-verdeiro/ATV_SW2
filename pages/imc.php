<?php
$respondido = false;
if (isset($_GET['peso']) || isset($_GET['altura'])) {
    if (isset($_GET['peso'])) {
        $peso = $_GET['peso'];
    }
    if (isset($_GET['altura'])) {
        $altura = $_GET['altura'];
    }
    if (isset($_GET['peso']) && isset($_GET['altura'])) {
        $imc = $peso / ($altura*$altura);
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
            <form action="imc.php" method="get" class="form">
                <div class="inputContainer" id="iCPeso">
                    <label for="peso">Peso:</label>
                    <input placeholder="Kg" type="number" step="0.01" name="peso" id="peso" min="0.1 " max required>
                </div>
                <div class="inputContainer" id="iCAltura">
                    <label for="altura">Altura:</label>
                    <input placeholder="Metro" type="number" step="0.01" name="altura" id="altura" min="    1 " required>
                </div>
                <input type="submit" value="Calcular" class="submit">
            </form>
        </section>
        <section class="section">
            <table class="tableImc">
                <thead>
                    <th>Baixo Peso</th>
                    <th>Peso Ideal</th>
                    <th>Levemente acima do Peso</th>
                    <th>Obesidade I</th>
                    <th>Obesidade II</th>
                    <th>Obesidade III</th>
                </thead>
                <tbody>
                    <td><18,5</td>
                    <td>18,5 - 24,9</td>
                    <td>25 - 29,9</td>
                    <td>30 - 34,9</td>
                    <td>35 - 39,9</td>
                    <td>>40</td>
                </tbody>
            </table>
        </section>
    </main>
    <?php include_once "../templates/footer.php"?>
</body>

</html>