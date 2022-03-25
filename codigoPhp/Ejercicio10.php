<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 10</title>
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
             * Mostrar el contenido del fichero que se está ejecutando.
             */
        
        echo "<p><h3>*Mostrar el contenido del fichero que se está ejecutando.*</h3></p>";
        echo "<p>Contenido del fichero: </p>";  
        highlight_file("../codigoPhp/Ejercicio10.php");
        
        ?> 
    </body>
</html>