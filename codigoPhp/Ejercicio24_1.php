<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 24</title>  
        <style>
            h2{
                text-align: center;
            }
         h3{
                color: darkslateblue;
            }
            label{
                margin-top: 100px;
            }
            fieldset{
                margin: auto;
                width: 550px;height: 800px;
                font-weight: bold;
                font-size: 20px;
                border: 3px solid black;
                color: black;
                position: relative;
            }
            input{
                 font-size: 16px;
                border-radius:5px;
            }
             input:nth-of-type(9){
                text-align: center;
                background: lightgray;
                border-radius:5px;
            }
            input:nth-of-type(12){
                text-align: center;
                font-size: 30px;
                border-radius:5px;
            }
            input:nth-of-type(13){
                font-size: 30px;
                border-radius:5px;
            }
            .caja1{
                
            background-color:red;
            border: 2px inset black;
}
        </style>
    </head>
    <body>
        <?php
            /*
             * @author: Johanna Herrero Pozuelo
             * Created on: 21/03/2022
             * Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas recogidas; en el caso de que alguna respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente, pero las respuestas que habíamos tecleado correctamente aparecerán en el formulario y no tendremos que volver a teclearlas.
             */
        
        echo "<h3>*Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas recogidas; en el caso de que alguna respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente, pero las respuestas que habíamos tecleado correctamente aparecerán en el formulario y no tendremos que volver a teclearlas.*</h3>";
       
        if(isset($_REQUEST['volver'])){ //Si el usuario pulsa cancelar
            header('Location: ../index.php');// le manda a la pagina del programa
            exit;
        }
        require_once '../core/210322ValidacionFormularios.php';
        
        
        $entradaOK = true;
        
        
        //declaracion de variables para comprobar fecha
        $fechaActual = date('Y/m/d');
        $fechaMin = "1920/01/01";     
        
        //Array de errores 
        $aErrores = ['nombre' => null,
                     'nombreO' => null,
                     'nombreOpcional' => null,
                     'apellido'=>null,
                     'dni' => null,
                     'fecha' => null,
                     'correo' => null,
                     'telefono' => null,
                     'cp' => null];
        
        
        //Array respuestas formulario 
        $aFormulario = ['nombre' => null,
                        'nombreO' => null,
                        'nombreOpcional' => null,
                        'apellido'=>null,
                        'dni' => null,
                        'fecha' => null,
                        'correo' => null,
                        'telefono' => null,
                        'cp' => null];
        
            if(isset($_REQUEST['enviar'])){ //Comprobamos que el usuario haya enviado el formulario
                $aErrores['nombre'] = validacionFormularios::comprobarAlfabetico($_REQUEST['nombre'], 200, 1, 1); 
                $aErrores['nombreO'] = validacionFormularios::comprobarAlfabetico($_REQUEST['nombreO'], 200, 1, 1); 
                $aErrores['nombreOpcional'] = validacionFormularios::comprobarAlfabetico($_REQUEST['nombreOpcional'], 200, 1, 0); 
                $aErrores['apellido'] = validacionFormularios::comprobarAlfabetico($_REQUEST['apellido'], 200, 1, 1);
                $aErrores['dni'] = validacionFormularios::validarDni($_REQUEST['dni'], 1); 
                $aErrores['fecha'] = validacionFormularios::validarFecha($_REQUEST['fecha'],$fechaActual,$fechaMin,1); 
                $aErrores['correo'] = validacionFormularios::validarEmail($_REQUEST['correo'], 1);
                $aErrores['telefono'] = validacionFormularios::validarTelefono($_REQUEST['telefono'], 1);
                $aErrores['cp']= validacionFormularios::validarCp($_REQUEST['cp'],1);
                
                // Recorremos el array de errores
                foreach ($aErrores as $campo => $error){
                    if ($error != null) { // Comprobamos que el campo no esté vacio
                        $entradaOK = false; // En caso de que haya algún error mostramos el formulario de nuevo    
                        $_REQUEST[$campo] = "";
                    }
                }
            }else{
                $entradaOK = false; // Si el usuario no ha enviado el formulario lo mostramos de nuevo
            }
            if($entradaOK){ // Si el usuario ha rellenado el formulario correctamente rellenamos el array aFormulario con las respuestas introducidas por el usuario
                $aFormulario['nombre'] = $_REQUEST['nombre'];
                $aFormulario['nombreO'] = $_REQUEST['nombreO'];
                $aFormulario['nombreOpcional'] = $_REQUEST['nombreOpcional'];
                $aFormulario['apellido'] = $_REQUEST['apellido'];
                $aFormulario['dni'] = $_REQUEST['dni'];
                $aFormulario['fecha'] = $_REQUEST['fecha'];
                $aFormulario['correo'] = $_REQUEST['correo'];
                $aFormulario['telefono'] = $_REQUEST['telefono'];
                $aFormulario['cp'] = $_REQUEST['cp'];
                
                //Mostramos los datos validados introducidos por el usuario por pantalla
               
                echo "<p>Su nombre: ".$aFormulario['nombre']."</p>";
                echo "<p>Su nombre Obligatorio: ".$aFormulario['nombreO']."</p>";
                echo "<p>Su nombre opcional: ".$aFormulario['nombreOpcional']."</p>";
                echo "<p>Su apellido: ".$aFormulario['apellido']."</p>";
                echo "<p>Su DNI: ".$aFormulario['dni']."</p>";
                echo "<p>Su fecha de nacimiento: ".$aFormulario['fecha']."</p>";
                echo "<p>Su correo electrónico: ".$aFormulario['correo']."</p>";
                echo "<p>Su telefono: ".$aFormulario['telefono']."</p>";
                echo "<p>Su codigo postal es: ".$aFormulario['cp']."</p>";
            }else{ // Si el usuario no ha rellenado el formulario correctamente volvera a rellenarlo
        ?>
        <form name="formulario" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <fieldset id="f2">
                <h2>Plantilla formulario</h2>
               <!-- Si el valor de la primera subexpresión es true (no es cero), se evalúa la segunda subexpresión, y ése será el resultado de la expresión condicional. Si no, se evalúa la tercera subexpresión, y ése será el valor.-->
                    <label for="nombre">Nombre: </label><br>
                    <input type="text" id="nombre"  name="nombre" placeholder="Introduce nombre" value="<?php echo(isset($_REQUEST['nombre']) ? $_REQUEST['nombre'] : null); ?>"><?php echo($aErrores['nombre']!=null ? "<span style='color:red'>".$aErrores['nombre']."</span>" : null); ?>
                    <br>
                    
                    <label for="apellido">Apellido: </label><br>
                    <input type="text" id="apellido"  name="apellido" placeholder="Introduce apellido" value="<?php echo(isset($_REQUEST['apellido']) ? $_REQUEST['apellido'] : null); ?>"><?php echo($aErrores['apellido']!=null ? "<span style='color:red'>".$aErrores['apellido']."</span>" : null); ?>
                    <br>
                    
                    <label for="dni">DNI: </label><br>
                    <input type="text" id="dni"  name="dni" placeholder="Introduce dni" value="<?php echo(isset($_REQUEST['dni']) ? $_REQUEST['dni'] : null);?>"><?php echo($aErrores['dni']!=null ? "<span style='color:red'>".$aErrores['dni']."</span>" : null); ?>
                    <br>
                    
                    <label for="fecha">Fecha nacimiento: </label><br>
                    <input type="date"  id="fecha"  name="fecha" value="<?php echo(isset($_REQUEST['fecha']) ? $_REQUEST['fecha'] : null);?>"><?php echo($aErrores['fecha']!=null ? "<span style='color:red'>".$aErrores['fecha']."</span>" : null); ?>
                    <br>
                    
                    <label for="correo">Correo electrónico: </label><br>
                    <input type="email" id="correo" name="correo" placeholder="Introduce correo" value="<?php echo(isset($_REQUEST['correo']) ? $_REQUEST['correo'] : null);?>"><?php echo($aErrores['correo']!=null ? "<span style='color:red'>".$aErrores['correo']."</span>" : null); ?>
                    <br>
                    
                    <label for="telefono">Teléfono: </label><br>
                    <input type="text" id="telefono"  name="telefono" placeholder="Introduce telefono" value="<?php echo(isset($_REQUEST['telefono']) ? $_REQUEST['telefono'] : null); ?>"><?php echo($aErrores['telefono']!=null ? "<span style='color:red'>".$aErrores['telefono']."</span>" : null); ?>
                    <br>
                    
                    <label for="cp">Código postal: </label><br>
                    <input type="text"  id="cp"  name="cp" placeholder="Introduce codigo postal"value="<?php echo(isset($_REQUEST['cp']) ? $_REQUEST['cp'] : null); ?>"><?php echo($aErrores['cp']!=null ? "<span style='color:red'>".$aErrores['cp']."</span>" : null); ?>
                    <br><br>
                    <div class="caja1"></div><br>
                    <label for="nombreO">Nombre Obligatorio: </label><br>
                    <input type="text" id="nombreO"  name="nombreO" placeholder="Introduce nombre" value="<?php echo(isset($_REQUEST['nombreO']) ? $_REQUEST['nombreO'] : null); ?>"><?php echo($aErrores['nombreO']!=null ? "<span style='color:red'>".$aErrores['nombreO']."</span>" : null); ?>
                    <br>
                    <label for="nombre">Nombre Deshabilitado: </label><br>
                    <input type="text" id="nombre"  name="nombre" placeholder="Introduce nombre" disabled>
                    <br>
                    <label for="nombreOpcional">Nombre Opcional: </label><br>
                    <input type="text" id="nombre"  name="nombreOpcional" placeholder="Introduce nombre" value="<?php echo(isset($_REQUEST['nombreOpcional']) ? $_REQUEST['nombreOpcional'] : null); ?>"><?php echo($aErrores['nombreOpcional']!=null ? "<span style='color:red'>".$aErrores['nombreOpcional']."</span>" : null); ?>
                    <br><br>
                    
                    <div class="caja1"></div><br>
                    <label for="fecha">Fecha nacimiento Javascript: </label><br>
                    <input type="date"  id="fechaJ"  name="fecha" value="<?php echo(isset($_REQUEST['fecha']) ? $_REQUEST['fecha'] : null);?>"><?php echo($aErrores['fecha']!=null ? "<span style='color:red'>".$aErrores['fecha']."</span>" : null); ?>
                    <br><br>
                    
                    <input type="submit" id="enviar" value="Enviar" name="enviar">
                    <input type="submit" value="Volver" name="volver">
            </fieldset>
        </form>
         <script>
		var input= document.getElementById("fechaJ");
		input.addEventListener("mouseout", valor);
			
                var fecha1 = new Date("1920/01/01");
		let fechaMinima = String(fecha1.getDate()) + '/' + String(fecha1.getMonth()+1)+ '/' + fecha1.getFullYear();
			
                let fecha = new Date();
		let fechaActual = String(fecha.getDate()) + '/' + String(fecha.getMonth()+1)+ '/' + fecha.getFullYear();
			
		console.log(fechaMinima);
		//console.log(fechaActual);
                
		function valor(){
                    var valorInput= document.getElementById("fechaJ").value;
                    console.log(valorInput);
                    if(valorInput< fechaMinima || valorInput> fechaActual || valorInput===null){
                        //alert("fecha incorrecta");
                        input.style.border="2px solid red";
                    }else{
                        //alert("fecha correcta");
                        input.style.border="2px solid green";
                    }
		}
			
            </script>
          <?php
            }
        ?>
       
    </body>
</html>
