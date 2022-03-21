<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 02</title>
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
             * Inicializar una variable HEREDOC
             */
        
            // DECLARACION DE VARIABLES
            echo "<h3>Inicializar una variable HEREDOC</h3>";
            
            //GUARDO EN LA VARIABLE EL TEXTO
            $heredoc= <<<DEL
                Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. <br>
                Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500
                DEL;
            
            echo "<p>Variable heredoc : $heredoc </p>";
        ?> 
    </body>
</html>

