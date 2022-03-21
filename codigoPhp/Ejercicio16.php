<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 16</title>
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
             * Recorrer el array anterior utilizando funciones para obtener el mismo resultado.
             */
        echo "<p><h3>*Recorrer el array anterior utilizando funciones para obtener el mismo resultado.*</h3></p>";
        
        //Definir el array y asignarle a cada dia el sueldo
        $sueldo=array(
            "Lunes"=>10,
            "Martes"=>8,
            "Miercoles"=>12,
            "Jueves"=>6,
            "Viernes"=>14,
            "Sabado"=>18,
            "Domingo"=>12
        );
        //Definir variable suma
         $suma=0;
        //recorrer  array
        foreach ( $sueldo as $precio){
            $suma=$suma+$precio;
            //variable con el total de la semana
        }
        //creamos la funcion
        function imprimir_Array( $paga, $dia){
            echo "$dia--->$paga <br>";
        }
        
        //array_walk->para cada elemento de la matriz aplica funciones definidas por el usuario
        echo "<h3<br>ARRAY MOSTRADO CON ARRAY_WALK<br>";
        array_walk($sueldo, 'imprimir_Array');
        
        echo "<p> Sueldo percibido durante la semana: $suma</p> <br>";
        
        ?> 
    </body>
</html>

