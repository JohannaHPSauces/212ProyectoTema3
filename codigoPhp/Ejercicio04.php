<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 04</title>
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
             * Mostrar en tu página index la fecha y hora actual en Oporto formateada en portugués
             */
        
            setlocale(LC_ALL, "portuguese"); // Esto es el idioma de la fecha
            date_default_timezone_set("Europe/Lisbon"); //Esto es la zona horaria
            
            $fecha= new DateTime(); //Onjeto de la clase DateTime
             
            echo "<p><h3>*Mostrar en tu página index la fecha y hora actual en Oporto formateada en portugués*</h3></p>";
            echo "<p>Fecha y hora de Oporto: " . $fecha->format('d-m-Y  H:i:s'). "</p>"; 
        ?> 
    </body>
</html>
