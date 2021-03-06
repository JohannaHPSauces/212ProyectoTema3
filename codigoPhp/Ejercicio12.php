<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 12 </title>
        <style>
            h3{
                font-size: 25px;
                color:darkslateblue;
            }
            h2{
                 font-size: 30px;
                color:red;
            }
            table{
                border: solid 2px black;
            }
            th{
                background: blue;
                color:white;
            }
            td{
                border: solid 1px black;
                background: bisque;
            }
        </style>
    </head>
    <body>
         <?php
            /*
             * @author: Johanna Herrero Pozuelo
             * Created on: 21/03/2022
             * Mostrar las variables superglobales con print_r() y foreach()
             */ 
         
        echo "* Mostrar las variables superglobales con print_r() y foreach()<br>";
        echo "<h2>VARIABLES MOSTRADAS CON FOREACH() </h2>";
         
        echo "<h3>Variable GET </h3><br>";
            echo "<table>";
            echo"<tr>";
            echo"<th>Clave</th>";
            echo "<th>Valor</th>";
            echo "</tr>";
            foreach ($_GET as $clave => $valor) {
                echo '<tr>';
                echo "<td>$clave</td>";
                echo "<td>$valor</td>";
                echo '</tr>';
            }
            echo '</table>';
            
            //////////////////////////////////////////////////////
        echo "<h3>Variable POST</h3><br>";
            echo "<table>";
            echo"<tr>";
            echo"<th>Clave</th>";
            echo "<th>Valor</th>";
            echo "</tr>";
            foreach ($_POST as $clave => $valor) {
                echo '<tr>';
                echo "<td>$clave</td>";
                echo "<td>$valor</td>";
                echo '</tr>';
            }
            echo '</table>';
            /////////////////////////////////////////////////////
        echo "<h3>Variable REQUEST</h3><br>";
            echo "<table>";
            echo"<tr>";
            echo"<th>Clave</th>";
            echo "<th>Valor</th>";
            echo "</tr>";
            foreach ($_REQUEST as $clave => $valor) {
                echo '<tr>';
                echo "<td>$clave</td>";
                echo "<td>$valor</td>";
                echo '</tr>';
            }
            echo '</table>';
           /////////////////////////////////////////////////////////////////// 
        echo "<h3>Variable SERVER</h3><br>";
            echo "<table>";
            echo"<tr>";
            echo"<th>Clave</th>";
            echo "<th>Valor</th>";
            echo "</tr>";
            foreach ($_SERVER as $clave => $valor) {
                echo '<tr>';
                echo "<td>$clave</td>";
                echo "<td>$valor</td>";
                echo '</tr>';
            }
            echo '</table>';
            /////////////////////////////////////////////////////////////
            
        echo "<h3>Variable SESSION</h3><br>";
            echo "<table>";
            echo"<tr>";
            echo"<th>Clave</th>";
            echo "<th>Valor</th>";
            echo "</tr>";
                if(isset($_SESSION)){
                    foreach ($_SESSION as $clave => $valor) {
                    echo '<tr>';
                    echo "<td>$clave</td>";
                    echo "<td>$valor</td>";
                    echo '</tr>';
                    }
                }else{
                    echo 'La variable SESSION esta vacia';
                }
            echo '</table>';
            
            ////////////////////////////////////////////////////////
        echo "<h3>Variable COOKIE</h3><br>";
            echo "<table>";
            echo"<tr>";
            echo"<th>Clave</th>";
            echo "<th>Valor</th>";
            echo "</tr>";
            foreach ($_COOKIE as $clave => $valor) {
                echo '<tr>';
                echo "<td>$clave</td>";
                echo "<td>$valor</td>";
                echo '</tr>';
            }
            echo '</table>';
            
            ////////////////////////////////////////////////////////
        echo "<h3>Variable ENV</h3><br>";
            echo "<table>";
            echo"<tr>";
            echo"<th>Clave</th>";
            echo "<th>Valor</th>";
            echo "</tr>";
            foreach ($_ENV as $clave => $valor) {
                echo '<tr>';
                echo "<td>$clave</td>";
                echo "<td>$valor</td>";
                echo '</tr>';
            }
            echo '</table>';
            /////////////////////////////////////////////////////////
        echo "<h3>Variable FILES</h3><br>";
            echo "<table>";
            echo"<tr>";
            echo"<th>Clave</th>";
            echo "<th>Valor</th>";
            echo "</tr>";
            foreach ($_FILES as $clave => $valor) {
                echo '<tr>';
                echo "<td>$clave</td>";
                echo "<td>$valor</td>";
                echo '</tr>';
            }
            echo '</table>'; 
            echo '<br>';
            echo '<br>';
         
//////////////////////////////////////////////////////////////////////////////////////////////// 
         
        echo "<h2>VARIABLES MOSTRADAS CON PRINT_R </h2>";
         
        echo "<h3>Variable GLOBALS</h3><br>";
        echo "<pre>";
        print_r($GLOBALS);
        echo "</pre>";
        echo '<br>';
        echo '<br>';
         
         
        echo "<h3>Variable SERVER</h3><br>";
        echo "<pre>";
        print_r($_SERVER);
        echo "<pre>";
        echo '<br>';
        echo '<br>';
         
        echo "<h3>Variable GET </h3><br>";
        echo "<pre>";
        print_r($_GET);
        echo "<pre>";
        echo '<br>';
        echo '<br>';
         
        echo "<h3>Variable POST</h3><br>";
        echo "<pre>";
        print_r($_POST);
        echo "<pre>";
        echo '<br>';
        echo '<br>';
         
        echo "<h3>Variable FILES</h3><br>";
        echo "<pre>";
        print_r($_FILES);
        echo "<pre>";
        echo '<br>';
        echo '<br>';
         
        echo "<h3>Variable COOKIE</h3><br>";
        echo "<pre>";
        print_r($_COOKIE);
        echo "<pre>";
        echo '<br>';
        echo '<br>';
         
        echo "<h3>Variable GLOBALS</h3><br>";
        echo "<pre>";
        print_r($GLOBALS);
        echo "<pre>";
        echo '<br>';
        echo '<br>';
         
        echo "<h3>Variable SESSION</h3><br>";
        echo "<pre>";
            if(isset($_SESSION)){
                print_r($_SESSION);
            }else{
                echo 'La variable SESSION esta vacia';
            }
        echo "<pre>";
        echo '<br>';
        echo '<br>';
         
        echo "<h3>Variable REQUEST</h3><br>";
        echo "<pre>";
        print_r($_REQUEST);
        echo "<pre>";
        echo '<br>';
        echo '<br>';
         
        echo "<h3>Variable ENV</h3><br>";
        echo "<pre>";
        print_r($_ENV);
        echo "<pre>";
?>
        
    </body>
</html>
