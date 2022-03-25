<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 09</title>
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
             * Mostrar el path donde se encuentra el fichero que se está ejecutando.
             */
        //$_SERVER es un array que contiene información, tales como cabeceras, rutas y ubicaciones de script. 
        
        echo "<p><h3>*Mostrar el path donde se encuentra el fichero que se está ejecutando.*</h3></p>";
        echo "<p>Path del fichero: ".$_SERVER['PHP_SELF']."</p>";  
        
        ?> 
    </body>
</html>