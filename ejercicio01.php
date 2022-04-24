<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 01 - Operaciones con PHP</title>
</head>
<body>
    <form method="post" action="">
    Ingresar Valor 1:<br>       <input type="text" name="valor1"><br>
    Ingresar Valor 2:<br>       <input type="text" name="valor2"><br>
    Resultado: <br>
    <input type="submit" name="Suma" value="Suma"><br>

    </form>

<?php
//Declaracion de variables
    $numero1=$_POST['valor1'];
    $numero2=$_POST['valor2'];

    //Solucion 1
    //$numero1= (!empty($_POST['valor1'])) ? $_POST['valor1'] : 0;
    //$numero2= (!empty($_POST['valor2'])) ? $_POST['valor2'] : 0;
    
    //solucion 2
    /*if (!empty($_POST['valor1'])){
        $numero1= $_POST['valor1'];
        $numero2= $_POST['valor2'];
    }
    else{
        $numero1= 0;
        $numero2= 0;
    }*/
        $suma=$numero1+$numero2;
        echo "El resultado de la Suma es : ".$suma
    
?>
</body>
</html>