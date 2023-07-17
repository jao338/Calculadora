<?php 

    include'../php/calculadora.php';

    $calc = new calculadora();

    $n1 = null;
    $n2 = null;
    $op = "1";
    $res = null;

    if(isset($_GET['op'])){
       
        $n1 = $_GET['num1'];
        $n2 = $_GET['num2'];
        $op = $_GET['op'];

        switch($op){
            case '1':

                $res = $calc->somar($n1, $n2);
                
                break;
            case '2':

                $res = $calc->subtrair($n1, $n2);
                    
                break;
            case '3':

                $res = $calc->multiplicar($n1, $n2);
    
                break;
            case '4':
    
                $res = $calc->dividir($n1, $n2);
                        
                break;
        }

    }

?>
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
        <div id="calc">

            <form action="index.php" method="GET">
                <label for="num1">Primeiro número: </label>
                <input type="number" name="num1" value= <?php echo $n1?> required>

                <label for="num2">Segundo número: </label>
                <input type="number" name="num2" value= <?php echo $n2?> required>

                <select name="op" id="op">
                    <option value="1"><?php ($op=='1')?'Selected':'';?>Somar</option>
                    <option value="2"><?php ($op=='2')?'Selected':'';?>Subtrair</option>
                    <option value="3"><?php ($op=='3')?'Selected':'';?>Multiplicar</option>
                    <option value="4"><?php ($op=='4')?'Selected':'';?>Dividir</option>
                </select>
                <input type="submit" name="bnt-igual" value="=" id="btn-igual">
            </form>
            <p>Resultado: <?php echo $res ?></p>

        </div>
        
    </main>
</body>
</html>