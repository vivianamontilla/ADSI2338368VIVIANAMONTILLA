<?php

    print("LIQUIDACION DEL EMPLEADO")."<P>";
    $nombre = $_REQUEST["nombre"];
    $cargo = $_REQUEST["cargo"];
    $salario = $_REQUEST["salario"];

    $vrincremento = $salario *0.25;
    $salario_total = $salario + $vrincremento;
    echo " NOMBRE: ".$nombre."<p>";
    echo " CARGO: ".$cargo."<p>";
    echo " SALARIO: ".$salario."<p>";
    print("<P>");
    
    echo " SU INCREMENTO ES: ".$vrincremento."<p>";
    print("<P>");
    print("<P>");
    echo " SALARIO TOTAL: ".number_format($salario_total)."<p>";
    print("<P>");
    print("<P>");
    echo '<a href="http://localhost/ADSI2338368%20viviana/01_FORMULARIO_EJERCICIO_01.php"><input type="submit" name="btn_VOLVER" value="VOLVER"></a>';
    print("<P>");
    echo '<a href="http://localhost/ADSI2338368%20viviana/MENU.php"><input type="submit" name="btn_MENU" value="MENU"></a>';

?>