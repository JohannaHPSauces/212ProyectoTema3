<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 15</title>
        <style>
            h3{
                color:darkslateblue;
            }
            h1{
                color:red;
            }
        </style>
    </head>
    <body>
        <?php
            /*
             * @author: Johanna Herrero Pozuelo
             * Created on: 21/03/2022
             * Crear e inicializar un array con el sueldo percibido de lunes a domingo. Recorrer el array para calcular el sueldo percibido durante la semana.
             */
        
        echo "<p><h3>*Crear e inicializar un array con el sueldo percibido de lunes a domingo. Recorrer el array para calcular el sueldo percibido durante la semana.*</h3></p>";
        
        //Definir el array y asignarle a cada dia el sueldo
        $sueldo=array(
            "lunes"=>10,
            "martes"=>8,
            "miercoles"=>12,
            "jueves"=>6,
            "viernes"=>14,
            "sabado"=>18,
            "domingo"=>12
        );
        
        //mostra el array
        var_dump($sueldo);
        //declarar la variable suma
        $suma=0;
        //recorrer  array
        foreach ( $sueldo as $precio){
            $suma=$suma+$precio;
            
        }
         echo "<p><strong> Sueldo percibido durante la semana: $suma</strong></p> <br>";
        
         echo "<p><h1>*Ejercicio baloncesto*</p></h1>";
         
         $aEquipo ["Benavente Basket"][1]["nombreJugadora"]= "Ana Herrero Pozuelo";
         $aEquipo ["Benavente Basket"][1]["altura"]= 165;
         $aEquipo ["Benavente Basket"][1]["fechaNac"]= "05/10/2001";
         
         $aEquipo ["Benavente Basket"][2]["nombreJugadora"]= "Johanna Herrero Pozuelo";
         $aEquipo ["Benavente Basket"][2]["altura"]= 175;
         $aEquipo ["Benavente Basket"][2]["fechaNac"]= "02/10/2001";
         
         $aEquipo ["Benavente Basket"][3]["nombreJugadora"]= "Elena Herrero Pozuelo";
         $aEquipo ["Benavente Basket"][3]["altura"]= 180;
         $aEquipo ["Benavente Basket"][3]["fechaNac"]= "08/10/2001";
         
         $aEquipo ["Zamora Basket"][1]["nombreJugadora"]= "Pepa Perez Alonso";
         $aEquipo ["Zamora Basket"][1]["altura"]= 190;
         $aEquipo ["Zamora Basket"][1]["fechaNac"]= "01/01/2001";
         
         $aEquipo ["Zamora Basket"][2]["nombreJugadora"]= "Maria Perez Alonso";
         $aEquipo ["Zamora Basket"][2]["altura"]= 170;
         $aEquipo ["Zamora Basket"][2]["fechaNac"]= "01/03/2001";
         
         $aEquipo ["Zamora Basket"][3]["nombreJugadora"]= "Lucia Perez Alonso";
         $aEquipo ["Zamora Basket"][3]["altura"]= 195;
         $aEquipo ["Zamora Basket"][3]["fechaNac"]= "01/02/2001";
         
        //Sacar por pantalla todos los datos de ambos equipos
        //Sacar por pantalla el nombre de los jugadores de ambos equipos
        //Sacar por pantalla las jugadoras mas altas ambos equipos
        //Sacar por pantalla la jugadora mas joven de ambos equipos
        echo "<h3>Sacar por pantalla todos los datos de ambos equipos</h3>";
        foreach ($aEquipo as $equipo => $datosE){
            foreach ($datosE as $dorsal =>$datos){
                foreach ($datos as $clave =>$valor){
                    echo("<p>Nombre del equipo: $equipo, Dorsal: " .$dorsal.", ".$clave.": ".$valor." <br></p>");
                }     
                echo "----------------------------------------";
            }
         }
        echo "<h3>Sacar por pantalla el nombre de los jugadores de ambos equipos</h3>";
        foreach ($aEquipo as $equipo => $datosE){
            foreach ($datosE as $dorsal =>$datos){
                $nombre= reset($datos);
                echo("<p>Nombre del equipo: $equipo, Dorsal: " .$dorsal.", ".$nombre." <br></p>");        
            }
        }
        echo "<br><h3>Sacar por pantalla las jugadoras mas altas de los dos equipos</h3>";
        foreach ($aEquipo as $equipo => $datosE){
            foreach ($datosE as $dorsal =>$datos){
                //print_r($datos["altura"]);
                unset($datos['fechaNac']);
                var_dump($datos);
               
            }
         }
        
        ?>
         
    </body>
</html>

