<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 01</title>
        <style>
            h3{
                color:darkslateblue;
            }
            h2{
                color:darkblue;
            }
            
        </style>
    </head>
    <body>
        <?php
            /*
             * @author: Johanna Herrero Pozuelo
             * Created on: 21/03/2022
             * Inicializar variables de los distintos tipos de datos básicos(string, int, float, bool)y mostrar los datos por pantalla (echo, print, printf, print_r, var_dump).
             */
        
            // DECLARACION DE VARIABLES
            $cadena="Esto es una cadena";
            $entero=13;
            $decimal=13.5;
            $logico=true;
            
            $fecha="01/01/2001";
            
            echo "Fecha formateada: ".date("Y-m-d", strtotime($fecha));
           
            
            echo "<h3>*Inicializar variables de los distintos tipos de datos básicos(string, int, float, bool) 
                    y mostrar los datos por pantalla (echo, print, printf, print_r, var_dump).*</h3>";
            
            
            // MOSTRAR VARIABLES CON ECHO
            echo "<h2>Variables mostradas con echo </h2>";
            echo "<p>Variable de tipo string:</p>";
            echo "<p>Esto es una prueba con comillas dobles \' y la variable $cadena</p><br>";
            echo ' Esto es una prueba con comillas simples \' y la variable $cadena';
            echo "<p>Variable de tipo int: $entero </p>";
            echo "<p>Variable de tipo float $decimal </p>";
            echo "<p>Variable de tipo bool $logico </p>";
            echo "<br>";
            
            // MOSTRAR VARIABLES CON PRINT
            print "<h2>Variables mostradas  con print </h2>";
            print "<p>Variable de tipo string: $cadena </p>";
            print "<p>Variable de tipo int: $entero </p>";
            print "<p>Variable de tipo float $decimal </p>";
            print "<p>Variable de tipo bool $logico </p>";
            print "<br>";
            
            // MOSTRAR VARIABLES CON PRINTF
            printf("<h2>Variables mostradas  con printf </h2>");
            printf("<p>Variable de tipo string: %s </p>",$cadena);
            printf("<p>Variable de tipo int: %d </p>",$entero);
            printf("<p>Variable de tipo float: %f </p>",$decimal);
            printf("<p>Variable de tipo bool: $logico </p>");
            printf("<br>");
            
            // MOSTRAR VARIABLES CON PRINT_R 
            print_r("<h2>Variables mostradas  con print_r </h2>");
            print_r("<p>Variable de tipo string: $cadena </p>");
            print_r("<p>Variable de tipo int: $entero </p>");
            print_r("<p>Variable de tipo float: $decimal </p>");
            print_r("<p>Variable de tipo bool: $logico </p>");
            print_r("<br>");
            
            // MOSTRAR VARIABLES CON VAR_DUMP
            echo "<h2>Variables mostradas con var_dump </h2>" ;
            var_dump("<p>Variable de tipo string: $cadena </p>");
            var_dump("<p>Variable de tipo int: $entero </p>");
            var_dump("<p>Variable de tipo float: $decimal </p>");
            var_dump("<p>Variable de tipo bool: $logico </p>");
            var_dump("<br>");
        ?> 
    </body>
</html>
