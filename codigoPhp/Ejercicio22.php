<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 22 </title>
        <style>
            h3{
                color: darkslateblue;
            }
            label{
                margin-top: 100px;
            }
            fieldset{
                margin:auto;
                width: 200px;height: 220px;
                border-radius: 5%;
                text-align: center;
                border: 3px solid black;
                color: black;
                font-size: 20px;
                font-weight: bold;
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
    </head>
    <body>
        <?php
            /*
             * @author: Johanna Herrero Pozuelo
             * Created on: 21/03/2022
             * Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas recogidas.
             */
        
        echo "<h3>*Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas recogidas.*</h3>";
        // Comprobar si el usuario ha enviado el formulario
        if(isset($_REQUEST['Enviar'])){
            echo "<p>Nombre: ".$_POST['nombre']."</p>";
            echo "<p >Edad: ".$_POST['edad']."</p>";
            
        }else{
            
        ?>
        <form name="formulario" action="Ejercicio22.php" method="post">
            <fieldset>
                    <label for="nombre">Nombre:</label><br>
                    <input type="text" name="nombre" placeholder="Introduce tu nombre">
                    <br>  
                    <br> 
                    <label for="edad">Edad:</label><br>
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























