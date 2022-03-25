<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 00</title>
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
             * Operar con fechas: calcular la fecha y el día de la semana de dentro de 60 días.
             */
            date_default_timezone_set("Europe/Madrid"); //Esto es la zona horaria
            
            $fecha= new DateTime(); //Objeto de la clase DateTime
             
            echo "<p><h3>*Operar con fechas: calcular la fecha y el día de la semana de dentro de 60 días.*</h3></p>";
            echo "<p>Fecha y hora de Oporto: " . $fecha->format('d-m-Y  H:i:s'). "</p>"; 
            echo "<p>Fecha y hora formateada +60 dias -> ". $fecha->modify('+60 day')->format('d-m-Y , H:i:s'). "</p>";
        ?> 
    </body>
</html>
