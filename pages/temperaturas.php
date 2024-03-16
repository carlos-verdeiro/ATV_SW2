<?php
$respondido = false;
if (isset ($_GET['para']) || isset ($_GET['de']) || isset ($_GET['temp'])) {
    if (isset ($_GET['para'])) {
        $para = $_GET['para'];
    }
    if (isset ($_GET['de'])) {
        $de = $_GET['de'];
    }
    if (isset ($_GET['temp'])) {
        $temp = $_GET['temp'];
    }
    if (isset ($_GET['tipo']) && isset ($_GET['temp'])) {
        if ($para == 'celsius' && $de == 'fare') {
            $res = ($temp * 1.8) + 32;
            $respondido = true;
        } else if ($para == 'fare' && $de == 'celsius') {
            $res = ($temp - 32) / 1.8;
            $respondido = true;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/custom.css">
    <title>Temperaturas</title>
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
                    <li><a href="imc.php">IMC</a></li>
                    <li><a href="temperaturas.php" class="active">Temperaturas</a></li>

                </ul>
                <ul id="linksDev">
                    <li><a href="https://github.com/carlos-verdeiro" target="_blank">
                            <?php include "../assets/img/github.svg" ?>
                        </a></li>
                    <li><a href="https://www.linkedin.com/in/carlos-daniel-verdeiro/" target="_blank">
                            <?php include "../assets/img/linkedin.svg" ?>
                        </a></li>
                    <li><a href="https://carlos-verdeiro.github.io/" target="_blank">
                            <?php include "../assets/img/web.svg" ?>
                        </a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="main">
        <section class="section">
            <form action="imc.php" method="get" class="form">
                <div class="inputContainer" id="iCPeso">
                    <label>Para:</label>
                    <div class="dadDivRadio">
                        <div class="divRadio">
                            <input type="radio" name="tipo" id="celsius">
                            <label for="celsius" class="labelRadio">Celsius</label>
                        </div>
                        <div class="divRadio">
                            <input type="radio" name="tipo" id="fare">
                            <label for="fare" class="labelRadio">Fahrenheit</label>
                        </div>
                    </div>
                </div>
                <div class="inputContainer" id="iCAltura">
                    <label for="altura">Temperatura:</label>
                    <input placeholder="Digite" type="number" step="0.01" name="temp" id="temp" min="1" value="<?php if (isset ($temp)) {
                        echo $temp;
                    } ?>" required>
                </div>
                <input type="submit" value="Calcular" class="submit">
            </form>
        </section>

        <?php
        if ($respondido) {
            echo '<section class="section">';
            echo '<h3 class="h3Res">Temperatura</h3>';
            echo '<h3 class="h3Res">Resultado</h3>';
            echo '</section>';
        }
        ?>
    </main>
    <?php include_once "../templates/footer.php" ?>
</body>

</html>