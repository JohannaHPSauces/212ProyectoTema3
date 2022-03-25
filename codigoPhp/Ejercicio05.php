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
             * Inicializar y mostrar una variable que tiene una marca de tiempo (timestamp)
             */
            $fecha= new DateTime();
            $fecha->setDate(2001, 9, 11);

            echo "<p><h3>*Inicializar y mostrar una variable que tiene una marca de tiempo (timestamp)*</h3></p>";
            echo "<p>Fecha: ".$fecha->format('d-m-Y')."</p>";
            echo "<p>Fecha con timeStamp: ".$fecha->getTimestamp()."</p>";
        
        ?> 
    </body>
</html>