<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 08</title>
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
             * Mostrar la dirección IP del equipo desde el que estás accediendo.
             */
        //$_SERVER es un array que contiene información, tales como cabeceras, rutas y ubicaciones de script. 
        
        echo "<p><h3>*Mostrar la dirección IP del equipo desde el que estás accediendo.*</h3></p>";
        echo "<p>IP del equipo: ".$_SERVER['REMOTE_ADDR']."</p>"; //muestra la ip del equipo.
        
        ?> 
    </body>
</html>