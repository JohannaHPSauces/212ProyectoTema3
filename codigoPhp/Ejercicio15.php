<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 15</title>
        <style>
            h3{
                color:darkslateblue;
            }
        </style>
    </head>
    <body>
        <?php
            /*
             * @author: Johanna Herrero Pozuelo
             * Created on: 21/03/2022
             * Crear e inicializar un array con el sueldo percibido de lunes a domingo. Recorrer el array para calcular el sueldo percibido durante la semana.
             */
        
        echo "<p><h3>*Crear e inicializar un array con el sueldo percibido de lunes a domingo. Recorrer el array para calcular el sueldo percibido durante la semana.*</h3></p>";
        
        //Definir el array y asignarle a cada dia el sueldo
        $sueldo=array(
            "lunes"=>10,
            "martes"=>8,
            "miercoles"=>12,
            "jueves"=>6,
            "viernes"=>14,
            "sabado"=>18,
            "domingo"=>12
        );
        //mostra el array
        var_dump($sueldo);
        //declarar la variable suma
        $suma=0;
        //recorrer  array
        foreach ( $sueldo as $precio){
            $suma=$suma+$precio;
            
        }
         echo "<p><strong> Sueldo percibido durante la semana: $suma</strong></p> <br>";
        
        ?> 
    </body>
</html>

