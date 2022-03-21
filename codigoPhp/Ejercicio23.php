<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 23 </title>
    </head>
    <style>
            h3{
                color: darkslateblue;
            }
            label{
                margin-top: 100px;
            }
            fieldset{
                margin: auto;
                width: 230px;height: 300px;
                border-radius: 5%;
                text-align: center;
                font-weight: bold;
                font-size: 20px;
                border: 3px solid black;
                color: black;
                position: relative;
                background: rgb(215, 185, 250);
            }
            input:nth-of-type(3){
                margin-top: 20px;
                font-size: 16px;
                border-radius:5px;
            }
            input:nth-of-type(4){
                font-size: 16px;
                border-radius:5px;
            }
        </style>
    <body>
        
        <?php
            /*
             * @author: Johanna Herrero Pozuelo
             * Created on: 21/03/2022
             * Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas recogidas; en el caso de que alguna respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente.
             */
        
              echo "<h3>*Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas recogidas; en el caso de que alguna respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente.*</h3>";
            if(isset($_POST['Enviar'])){ // Si el usuario le ha dado a enviar
               $nombre= $_POST['nombre'];
               $edad= $_POST['edad'];
           
            if (empty($_POST['nombre']) || empty($_POST['edad']) ){ //SI ALGUN CAMPO ESTA VACIO
               
        ?>
            <!--COMPROBACION DEL FORMULARIO-->
            <form name="formulario" action="Ejercicio23.php" method="post">
                <fieldset>
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre"  name="nombre" >
                        <?php
                            if(empty($nombre)){ //SI EL CAMPO NOMBRE ESTA VACIO MOSTRAMOS EL ERROR
                                echo "<a style='color:red;'><p>Debes de introducir un nombre</p></a>";//mostrar error
                            }
                        ?>
                    <label for="edad">Edad:</label>
                        <input type="text" ide="edad" name="edad">
                        <?php
                            if(empty($edad)){ //SI EL CAMPO EDAD ESTA VACIO MOSTRAMOS EL ERROR
                                echo "<a style='color:red;'><p>Debes de introducir tu edad</p></a>"; //mostrar error
                            }
                        ?>
                    <input type="reset" value="Borrar" name="Borrar">
                    <input type="submit" value="Enviar" name="Enviar">
                </fieldset>
            </form>
        
        <?php
        }else{  //SI EL FORMULARIO ESTA RELLENO LO MOSTRAMOS                                                              
            echo "Tu nombre es : ".$nombre."<br>Tu edad es: ".$edad."<br>"; 
           }
       
        }else {    //SI NO SE HA ACABADO DE RELLENAR EL FORMULARIO
        ?>
        <form name="formulario" action="Ejercicio23.php" method="post">
            <fieldset>
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" placeholder="Introduce tu nombre">
                <br><br>
                <label for="edad">Edad:</label>
                <input type="text" name="edad" placeholder="Introduce tu edad">
                <br><br>
                <input type="reset" value="Borrar" name="Borrar">
                <input type="submit" value="Enviar" name="Enviar">
            </fieldset>
        </form>
        <?php
           }
        ?>
    </body>
</html>
