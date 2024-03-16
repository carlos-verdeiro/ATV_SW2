<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="shortcut icon" href="assets/img/home.ico" type="image/x-icon">
    <title>Menu principal</title>
</head>

<body>
    <header>
        <nav>
            <h1>MENU</h1>
            <div id="divNav1">
                <ul id="linksPages">
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="pages/multa.php">Multa</a></li>
                    <li><a href="pages/primos.php">Primos</a></li>
                    <li><a href="pages/imc.php">IMC</a></li>
                    <li><a href="pages/temperaturas.php">Temperaturas</a></li>

                </ul>
                <ul id="linksDev">
                    <li><a href="https://github.com/carlos-verdeiro" target="_blank"><?php include "assets/img/github.svg" ?></a></li>
                    <li><a href="https://www.linkedin.com/in/carlos-daniel-verdeiro/" target="_blank"><?php include "assets/img/linkedin.svg" ?></a></li>
                    <li><a href="https://carlos-verdeiro.github.io/" target="_blank"><?php include "assets/img/web.svg" ?></a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <?php
        include_once 'templates/selecaoAleatoria.php';
        ?>
    </main>
    <?php include_once "templates/footer.php" ?>
</body>

</html>