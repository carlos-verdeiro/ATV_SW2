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
                    <input type="number" name="peso" id="peso" min="0.1 " required>
                </div>
                <div class="inputContainer" id="iCAltura">
                    <label for="altura">Altura:</label>
                    <input type="number" name="altura" id="altura" min="0.1 " required>
                </div>
                <input type="submit" value="Calcular"class="submit">
            </form>
        </section>
    </main>
    <?php include_once "../templates/footer.php"?>
</body>

</html>