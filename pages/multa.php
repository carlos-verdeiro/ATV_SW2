<?php
if (isset($_GET['peso'])) {
    $peso = $_GET['peso'];
    $pesoMax = 50;
    $multa = 4;
    if ($peso > $pesoMax) {
        $excedente = (int) $peso - $pesoMax;
        $valorMulta =  $excedente * $multa;
        $multado = true;
    } else {
        $multado = false;
    }
}
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/custom.css">
    <link rel="shortcut icon" href="../assets/img/ticket.ico" type="image/x-icon">
    <title>Multa</title>
</head>

<body>
    <header>
        <nav>
            <h1>MENU</h1>
            <div id="divNav1">
                <ul id="linksPages">
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="multa.php" class="active">Multa</a></li>
                    <li><a href="primos.php">Primos</a></li>
                    <li><a href="imc.php">IMC</a></li>
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
    <main>
        <section class="section">
            <h1 class="h1Title">Calcular Multa</h1>
            <form action="multa.php" method="get" class="form">
                <div class="inputContainer" id="iCTemp">
                    <label for="peso">Peso do peixe:</label>
                    <input placeholder="Kg" type="number" step="0.01" name="peso" id="peso" min="0" value="<?php if (isset($peso)) {
                                                                                                                echo $peso;
                                                                                                            } ?>" required>
                </div>
                <input type="submit" value="Verificar" class="submit">
            </form>
        </section>

        <?php
        if (isset($_GET['peso'])) {
            echo '<section class="section">';

            echo '<h3 class="h3Res">Peso do peixe: ' . number_format($peso, 1) . ' Kg</h3>';
            if ($multado) {
                echo '<h3 class="h3Res">Quilos excedido: ' . $excedente . ' Kg</h3>';
                echo '<h3 class="h3Res">Valor da multa: R$' . number_format($valorMulta, 2) . '</h3>';
                echo '<p class="pRes">Peso limite: ' . $pesoMax . 'Kg</p>';
                echo '<p class="pRes">Valor da multa por quilo: R$' . number_format($multa, 2) . '</p>';
            }
            echo '</section>';
        }
        ?>
    </main>
    <?php include_once "../templates/footer.php" ?>
</body>

</html>