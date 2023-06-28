<?php include'../php/calculadora.php'?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="../img-icon/calc/16x16.png">
</head>
<body>
    
    <main>

        <div class="calculadora">
            <div class="topo">
                <!--<img src="../img-icon/calc/512x512.png" alt="icon" class="img-calc"> -->
            
                <h2 class="titulo">Calculadora</h2>

                <div class="topo-fim">
                    <button class="minus"><img src="../img-icon/minus/512x512.png" alt="min" class="icon-minus" width="16px"/></button>                    
                    <button class="square"><img src="../img-icon/square/512x512.png" alt="max" class="icon-square" width="16px"/></button>
                    <button class="close"><img src="../img-icon/close/512x512.png" alt="close" class="icon-close" width="16px"/></button>
                </div>
            </div>

            
            <div class="visor">
                <textarea name="visor" id="visor" cols="65" rows="10"></textarea>
            </div>
            

            <div class="buttons">
                <form action="index.php">

                    <button type="submit" class="btn-num" id="btn-0">0</button>
                    <button type="submit" class="btn-num" id="btn-1">1</button>
                    <button type="submit" class="btn-num" id="btn-2">2</button>
                    <button type="submit" class="btn-num" id="btn-3">3</button>
                    <button type="submit" class="btn-num" id="btn-4">4</button>
                    <button type="submit" class="btn-num" id="btn-5">5</button>
                    <button type="submit" class="btn-num" id="btn-6">6</button>
                    <button type="submit" class="btn-num" id="btn-7">7</button>
                    <button type="submit" class="btn-num" id="btn-8">8</button>
                    <button type="submit" class="btn-num" id="btn-9">9</button>

                    <button class="btn-op">+</button>
                    <button class="btn-op">-</button>
                    <button class="btn-op">x</button>
                    <button class="btn-op">/</button>

                    <button class="btn-equal">=</button>
                </form>
            </div>

            <div class="base">
                <h5 style="display: block;">Copyright</h5>
            </div>
        </div>

    </main>
</body>
</html>