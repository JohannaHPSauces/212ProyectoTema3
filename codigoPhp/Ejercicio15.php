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
            p{
                font-weight: bold;
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
         
         $aEquipos ["Benavente Basket"][1]["nombreJugadora"]= "Ana Herrero Pozuelo";
         $aEquipos ["Benavente Basket"][1]["altura"]= 165;
         $aEquipos ["Benavente Basket"][1]["fechaNac"]= "05/10/2001";
         
         $aEquipos ["Benavente Basket"][2]["nombreJugadora"]= "Johanna Herrero Pozuelo";
         $aEquipos ["Benavente Basket"][2]["altura"]= 175;
         $aEquipos ["Benavente Basket"][2]["fechaNac"]= "02/10/2001";
         
         $aEquipos ["Benavente Basket"][3]["nombreJugadora"]= "Elena Herrero Pozuelo";
         $aEquipos ["Benavente Basket"][3]["altura"]= 180;
         $aEquipos ["Benavente Basket"][3]["fechaNac"]= "08/10/2001";
         
 ////////////////////////////////////////////////////////////////////////////////////////////////////////////        
         $aEquipos ["Zamora Basket"][1]["nombreJugadora"]= "Pepa Perez Alonso";
         $aEquipos ["Zamora Basket"][1]["altura"]= 190;
         $aEquipos ["Zamora Basket"][1]["fechaNac"]= "01/01/2001";
         
         $aEquipos ["Zamora Basket"][2]["nombreJugadora"]= "Maria Perez Alonso";
         $aEquipos ["Zamora Basket"][2]["altura"]= 170;
         $aEquipos ["Zamora Basket"][2]["fechaNac"]= "01/03/2001";
         
         $aEquipos ["Zamora Basket"][3]["nombreJugadora"]= "Lucia Perez Alonso";
         $aEquipos ["Zamora Basket"][3]["altura"]= 195;
         $aEquipos ["Zamora Basket"][3]["fechaNac"]= "01/02/2001";
         
        //Sacar por pantalla todos los datos de ambos equipos
        //Sacar por pantalla el nombre de los jugadores de ambos equipos
        //Sacar por pantalla las jugadoras mas altas ambos equipos
        //Sacar por pantalla la jugadora mas joven de ambos equipos
         
        echo "<h3>Sacar por pantalla todos los datos de ambos equipos</h3>";
        foreach ($aEquipos as $equipo => $aEquipo){
            echo("<p>Nombre del equipo: $equipo</p>");
            foreach ($aEquipo as $dorsal =>$aDorsal){
                echo("<p>Dorsal: $dorsal</p>");
                foreach ($aDorsal as $dato =>$valor){
                    echo("-".$dato.": ".$valor." <br></p>");
                }     
                echo "----------------------------------------";
            }
         }
         
         echo "<h3>Sacar por pantalla el nombre de los jugadores de ambos equipos</h3>";
         foreach ($aEquipos as $equipo => $aEquipo){
            echo("<p>Nombre del equipo: $equipo</p>");
            foreach ($aEquipo as $dorsal =>$aDorsal){
                echo("Dorsal: $dorsal");
                foreach ($aDorsal as $dato =>$valor){
                    if($dato=="nombreJugadora"){
                        echo("-".$valor." <br></p>");
                    }
                }     
            }
         }
         echo "<br><h3>Sacar por pantalla las jugadoras mas altas de los dos equipos</h3>";
         foreach ($aEquipos as $equipo => $aEquipo){
             $aJugadoraMasAlta[$equipo]["nombre"]=null;
             $aJugadoraMasAlta[$equipo]["fechaNac"]=null;
             $aJugadoraMasAlta[$equipo]["altura"]=null;
            foreach ($aEquipo as $dorsal =>$aDorsal){
                foreach ($aDorsal as $dato =>$valor){
                    if($dato=="altura"){
                        if(is_null($aJugadoraMasAlta[$equipo]["altura"])){
                            $aJugadoraMasAlta[$equipo]["altura"]=$valor;
                            $aJugadoraMasAlta[$equipo]["nombre"]=$aEquipos[$equipo][$dorsal]["nombreJugadora"];
                            $aJugadoraMasAlta[$equipo]["fechaNac"]=$aEquipos[$equipo][$dorsal]["fechaNac"];
                        }else{
                            if($valor > $aJugadoraMasAlta[$equipo]["altura"]){
                                $aJugadoraMasAlta[$equipo]["altura"]=$valor;
                                $aJugadoraMasAlta[$equipo]["nombre"]=$aEquipos[$equipo][$dorsal]["nombreJugadora"];
                                $aJugadoraMasAlta[$equipo]["fechaNac"]=$aEquipos[$equipo][$dorsal]["fechaNac"];
                            }
                        }
                    }
                }     
            }
         }
         foreach ($aJugadoraMasAlta as $equipo => $aEquipo){
            echo("<p>Nombre del equipo: $equipo</p>");
                foreach ($aEquipo as $dato =>$valor){
                    echo("-".$dato.": ".$valor." <br></p>");
                }     
                echo "----------------------------------------";
            
         }
         
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
         
         echo "<br><h3>Sacar por pantalla la jugadora mas joven de ambos equipos</h3>";
         foreach ($aEquipos as $equipo => $aEquipo){
             $aJugadoraMasJoven[$equipo]["nombre"]=null;
             $aJugadoraMasJoven[$equipo]["fechaNac"]=null;
             $aJugadoraMasJoven[$equipo]["altura"]=null;
            foreach ($aEquipo as $dorsal =>$aDorsal){
                foreach ($aDorsal as $dato =>$valor){
                    if($dato=="fechaNac"){
                        if(is_null($aJugadoraMasJoven[$equipo]["fechaNac"])){
                            $aJugadoraMasJoven[$equipo]["fechaNac"]=$valor;
                            $aJugadoraMasJoven[$equipo]["nombre"]=$aEquipos[$equipo][$dorsal]["nombreJugadora"];
                            $aJugadoraMasJoven[$equipo]["altura"]=$aEquipos[$equipo][$dorsal]["altura"];
                        }else{
                            if($valor > $aJugadoraMasJoven[$equipo]["fechaNac"]){
                                $aJugadoraMasJoven[$equipo]["fechaNac"]=$valor;
                                $aJugadoraMasJoven[$equipo]["nombre"]=$aEquipos[$equipo][$dorsal]["nombreJugadora"];
                                $aJugadoraMasJoven[$equipo]["altura"]=$aEquipos[$equipo][$dorsal]["altura"];
                            }
                        }
                    }
                }     
            }
         }
         foreach ($aJugadoraMasJoven as $equipo => $aEquipo){
            echo("<p>Nombre del equipo: $equipo</p>");
                foreach ($aEquipo as $dato =>$valor){
                    echo("-".$dato.": ".$valor." <br></p>");
                }     
                echo "----------------------------------------";
            
         }
         
        echo "<br><h3>Version2 Sacar por pantalla las jugadoras mas altas de los dos equipos</h3>";
        foreach ($aEquipos as $equipo => $aEquipo){
             $aJugadoraMasAlta[$equipo]=null;
            foreach ($aEquipo as $dorsal =>$aDorsal){
                foreach ($aDorsal as $dato =>$valor){
                    if($dato=="altura"){
                        if(is_null($aJugadoraMasAlta[$equipo])){
                            $aJugadoraMasAlta[$equipo]=$dorsal;
                        }else{
                            if($valor > $aEquipos[$equipo][$dorsal]["altura"]){
                                $aJugadoraMasAlta[$equipo]=$dorsal;
                            }
                        }
                    }
                }     
            }
        }
        foreach ($aEquipos as $equipo => $aEquipo){
            echo "La jugadora mas alta del equipo $equipo es: ".$aEquipos[$equipo][$aJugadoraMasAlta[$equipo]]["nombreJugadora"];
            
        }
         
       /* echo "<h3>Sacar por pantalla el nombre de los jugadores de ambos equipos</h3>";
        foreach ($aEquipo as $equipo => $datosE){
            foreach ($datosE as $dorsal =>$datos){
                $nombre= reset($datos);
                echo("<p>Nombre del equipo: $equipo, Dorsal: " .$dorsal.", ".$nombre." <br></p>");        
            }
        }
        echo "<br><h3>Sacar por pantalla las jugadoras mas altas de los dos equipos</h3>";
        foreach ($aEquipo as $equipo => $datosE){
            foreach ($datosE as $dorsal =>$datos){
                $acumulador=0;
                //var_dump(reset($datos));
                var_dump(next($datos));
                
            }
        }*/
        
        ?>
         
    </body>
</html>

