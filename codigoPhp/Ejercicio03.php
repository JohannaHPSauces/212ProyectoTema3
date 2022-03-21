<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 03</title>
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
             * Mostrar en tu página index la fecha y hora actual formateada en castellano. (Utilizar cuando sea posible la clase DateTime)
             */
        
            setlocale(LC_ALL, "spain"); // Esto es el idioma de la fecha
            date_default_timezone_set("Europe/Madrid"); //Esto es la zona horaria
            
            $fecha= new DateTime(); //Objeto de la clase DateTime
            
            echo "<h3>*Mostrar en tu página index la fecha y hora actual formateada en castellano."
            . "(Utilizar cuando sea posible la clase DateTime)*</h3></";
            
            echo "<p>Fecha y hora de España: " . $fecha->format('d-m-Y  H:i:s'). "</p>"; 
        ?> 
    </body>
</html>