<?php

function form($num)
{
    switch ($num) {
        case 0:
            echo '
            
            <section class="section">
            <h1 class="h1Title">Calcular IMC</h1>
            <form action="pages/imc.php" method="get" class="form">
                <div class="inputContainer" id="iCDe">
                    <label>Sexo:</label>
                    <div class="dadDivRadio">
                        <div class="divRadio">
                            <input type="radio" name="sexo" id="homem" value="homem">
                            <label for="homem" class="labelRadio">Homem</label>
                        </div>
                        <div class="divRadio">
                            <input type="radio" name="sexo" id="mulher" value="mulher">
                            <label for="mulher" class="labelRadio">Mulher</label>
                        </div>
                    </div>
                </div>
                <div class="inputContainer" id="iCPeso">
                    <label for="peso">Peso:</label>
                    <input placeholder="Kg" type="number" step="0.01" name="peso" id="peso" min="0.1 " required>
                </div>
                <div class="inputContainer" id="iCAltura">
                    <label for="altura">Altura:</label>
                    <input placeholder="Metro" type="number" step="0.01" name="altura" id="altura" min="1" required>
                </div>
                <input type="submit" value="Calcular" class="submit">
            </form>
        </section>
            
            ';
            break;

        case 1:
            echo '
                
            <section class="section">
            <h1 class="h1Title">Calcular Multa</h1>
            <form action="pages/multa.php" method="get" class="form">
                <div class="inputContainer" id="iCTemp">
                    <label for="peso">Peso do peixe:</label>
                    <input placeholder="Kg" type="number" step="0.01" name="peso" id="peso" min="0" required>
                </div>
                <input type="submit" value="Verificar" class="submit">
            </form>
        </section>
                
                ';
            break;
        case 2:
            echo '
                    
            <section class="section">
            <h1 class="h1Title">Calcular Números Primos</h1>
            <form action="pages/primos.php" method="get" class="form">
                <div class="inputContainer" id="iCPeso">
                    <label for="peso">Primos até:</label>
                    <input placeholder="Limite" type="number" step="1" name="primos" id="primos" min="2" required>
                </div>
                <input type="submit" value="Mostrar" class="submit">
            </form>
        </section>
                    
                    ';
            break;
        case 3:
            echo '
                        
            <section class="section">
            <h1 class="h1Title">Conversão de Temperaturas</h1>
            <form action="pages/temperaturas.php" method="get" class="form">
                <div class="inputContainer" id="iCDe">
                    <label>Converter para:</label>
                    <div class="dadDivRadio">
                        <div class="divRadio">
                            <input type="radio" name="for" id="celsius" value="celsius">
                            <label for="celsius" class="labelRadio">Celsius</label>
                        </div>
                        <div class="divRadio">
                            <input type="radio" name="for" id="fare" value="fare">
                            <label for="fare" class="labelRadio">Fahrenheit</label>
                        </div>
                    </div>
                </div>
                <div class="inputContainer" id="iCTemp">
                    <label for="altura">Temperatura:</label>
                    <input placeholder="Digite" type="number" step="0.01" name="temp" id="temp" min="1" required>
                </div>
                <input type="submit" value="Calcular" class="submit">
            </form>
        </section>
                        
                        ';
            break;
    }
}

$form1 = rand(0, 3);

do {
    $form2 = rand(0, 3);
} while ($form2 == $form1);

form($form1);
form($form2);
