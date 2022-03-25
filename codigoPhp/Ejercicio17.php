<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 17</title>
        <style>
            h3{
                color: darkslateblue;
            }
            h4{
                color: blue;
                text-transform: uppercase;
                font-size: 22px;
            }
            p{
                color:red;
            }
            span{
                color:green;
            }
        </style>
    </head>
    <body>
        <?php
            /*
             * @author: Johanna Herrero Pozuelo
             * Created on: 21/03/2022
             * Inicializar un array (bidimensional con dos índices numéricos) donde almacenamos el nombre de las personas que tienen reservado el asiento en un teatro de 20 filas y 15 asientos por fila.
             */
        
        echo "<p><h3>*Inicializar un array (bidimensional con dos índices numéricos) donde almacenamos el nombre de las personas que tienen reservado el asiento en un teatro de 20 filas y 15 asientos por fila.*</h3></p>";
           
        //Crear el array y asignar a los sitios vacios null
        //Recorro filas hasta 20
        for($fila=1; $fila<=20; $fila++){
            $aTeatro[$fila]=[];
            //Recorro asientos hasta 15
            for($asiento=1;$asiento<=15;$asiento++){
                $aTeatro[$fila][$asiento]=null;
            }
        }
        
        //Asignacion de los asientos de 5 personas
        $aTeatro[2][5]= "Elena";
        $aTeatro[2][3]= "Juan";
        $aTeatro[5][1]= "Cristina";
        $aTeatro[12][3]= "Pedro";
        $aTeatro[3][5]= "Pepe";
        
        echo"<h4>Asientos recorridos con for</h4>";
         
        //Recorro filas
        for($fila=1; $fila<=20; $fila++){
            //Recorro asientos
            for($asiento=1;$asiento<=15;$asiento++){
                //Si la fila y el asiento esta ocupado muestro el nombre de quien se sienta ahí
                if ($aTeatro[$fila][$asiento]) {                      
                    echo("<p>Fila " . $fila ." asiento número " . $asiento ." estará ocupado por => " . $aTeatro[$fila][$asiento] ."<br></p>");
                }else{
                     echo("<span>Fila " . $fila ." asiento número " . $asiento ." estará => libre <br></span>");
                }
                     
                }
        }
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////        
        echo"<h4>Asientos recorridos con foreach()</h4>";
         
        //Recorro filas
        foreach ($aTeatro as $fila => $asiento) {   
            //Recorro asientos
            foreach ($asiento as $asiento => $nombre) {  
                //Si la fila y el asiento esta ocupado muestro el nombre de quien se sienta ahí
                if ($aTeatro[$fila][$asiento]) {  
                    echo("<p>Fila " . $fila ." asiento número " . $asiento ." estará ocupado por => " . $aTeatro[$fila][$asiento] ."<br></p>");
                }else{
                    echo("<span>Fila " . $fila ." asiento número " . $asiento ." estará => libre <br></span>");
                }
            }
        }
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////        
        echo"<h4>Asientos recorridos con while</h4>";
        $fila= 1;
        while($fila<=20){ //Recorre las filas
            $asiento= 1;
            while ($asiento <=15){// Recorre las columnas
                //Si la fila y el asiento esta ocupado muestro el nombre de quien se sienta ahí
                if ($aTeatro[$fila][$asiento]) {  
                    echo("<p>Fila " . $fila ." asiento número " . $asiento ." estará ocupado por => " . $aTeatro[$fila][$asiento] ."<br></p>");
                }else{
                    echo("<span>Fila " . $fila ." asiento número " . $asiento ." estará => libre <br></span>");
                }
                $asiento= $asiento+1;
            }
            $fila= $fila+1;
        }
        ?> 
    </body>
</html>


         