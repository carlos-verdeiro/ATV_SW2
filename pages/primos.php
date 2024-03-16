<?php
if (isset($_GET['primos'])) {
    $primos = $_GET['primos'];

    function primo($num)
    {
        for ($i = 2; $i <= $num / 2; $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }
        return true;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/custom.css">
    <link rel="shortcut icon" href="../assets/img/number.ico" type="image/x-icon">
    <title>Primos</title>
</head>

<body>
    <header>
        <nav>
            <h1>MENU</h1>
            <div id="divNav1">
                <ul id="linksPages">
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="multa.php">Multa</a></li>
                    <li><a href="primos.php" class="active">Primos</a></li>
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
    <main class="main">
        <section class="section">
            <h1 class="h1Title">Calcular Números Primos</h1>
            <form action="primos.php" method="get" class="form">
                <div class="inputContainer" id="iCPeso">
                    <label for="peso">Primos até:</label>
                    <input placeholder="Limite" type="number" step="1" name="primos" id="primos" min="2" value="<?php if (isset($primos)) {
                                                                                                                    echo $primos;
                                                                                                                } ?>" required>
                </div>
                <input type="submit" value="Mostrar" class="submit">
            </form>
        </section>
        <?php
        if (isset($_GET['primos'])) {
            echo '<section class="section">';
            $primos = $_GET['primos'];

            echo '<h3 class="h3Res">Números primos até ' . $primos . ':</h3>';
            echo '<p class="pRes">';
            for ($i = 2; $i <= $primos; $i++) {
                if (primo($i)) {
                    echo "|$i ";
                }
            }
            echo '</p>';
            echo '</section>';
        }
        ?>

    </main>
    <?php include_once "../templates/footer.php" ?>
</body>

</html>