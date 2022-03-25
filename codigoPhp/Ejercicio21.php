<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 21 </title>
        <style>
            h3{
                color: darkslateblue;
            }
            label{
                margin-top: 100px;
            }
            fieldset{
                margin:auto;
                text-align: center;
                font-weight: bold;
                font-size: 20px;
                width: 200px;height: 220px;
                border-radius: 5%;
                border: 3px solid black;
                color: black;
                position: relative;
                background: rgb(215, 185, 250);
            }
            input:nth-of-type(3){
                margin-top: 30px;
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
             * Construir un formulario para recoger un cuestionario realizado a una persona y enviarlo a una página Tratamiento.php para que muestre las preguntas y las respuestas recogidas.
             */
        
        echo "<h3>*Construir un formulario para recoger un cuestionario realizado a una persona y enviarlo a una página Tratamiento.php para que muestre las preguntas y las respuestas recogidas.*</h3>"
        ?> 
        <form name="formulario" action="TratamientoE21.php" method="post">
            <fieldset>
                    <label for="nombre">Nombre:</label><br>
                    <input type="text" name="nombre" placeholder="Introduce tu nombre">
                    <br><br>
                    <label for="edad">Edad:</label><br>
                    <input type="text" name="edad" placeholder="Introduce tu edad">
                    <br><br>              
                    <input type="reset" value="Borrar" name="Borrar">
                    <input type="submit" value="Enviar" name="Enviar">
            </fieldset>
        </form>
        
    </body>
</html>
