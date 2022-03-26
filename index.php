<!DOCTYPE html>

<html>
    <head>
        <title>Johanna Herrero Pozuelo</title>
        <meta charset="UTF-8">
        <style>
	@import url('http://fonts.cdnfonts.com/css/04b30');
	@import url('http://www.fontsaddict.com/fontface/mario-kart-ds-regular.ttf');
			/* 
				Author     : johanna Herrero Pozuelo
				
			*/
			
body{
	font-family:OCR A Std, monospace;
	/*background-image: url(images/retro4.jpg); */
     /* background-image: url("https://acegif.com/wp-content/gif/snwflks-5.gif"); */
	background-repeat:no-repeat;
	background-color:rgb(215, 185, 250);
        background-size: cover;
	
}
/* caja titulo */
h2{ 
	font-family: '04b', sans-serif;
	text-shadow: black 0.1em 0.1em 0.2em;
	text-align:center;
	padding:10px;
	color:crimson;
	background-color:blueviolet;
	margin-top:0%;
	border: 8px dotted blue;
}
h2:nth-of-type(2){
        font-size: 18px;
        width: 140px;height: 20px;
        border: none;
        border-radius: 50%;
}
h2:nth-of-type(2) a{
    text-decoration: none;
    color:red;
}
/*caja debajo de titulo*/
			
			
table {
	margin: 4rem auto;
	table-layout: fixed;
	width: 80%;
	height:100px;
	color:white;
	border-collapse: collapse;
	border: 4px solid black;
	text-align:left;
	padding:2px;
        font-weight: bold;
}
td{
        background: darkorchid;
	text-align:left;
        font-weight: bold;
	border: 4px solid black;width:90px;
}
th{
        background: darkorchid;
        border: 4px solid black;
}
.ver{
        margin-top:2px;
        margin-left:25px;
}
.play{
        margin-top:2px;
        margin-left:30px;
}

footer{
       background: blueviolet;
       border-radius: 5px 5px 5px 5px;
       font-weight: bold;
       position: fixed;
       bottom: -1px;
       width: 100%;
       height: 60px;
       color: black;
       text-align: center;
       padding: 2px;
       vertical-align: middle;
}
a img{
        display: flex;
	margin:auto;
	width:35px;
	height:35px;
}
strong{
        font-size: 20px;
}
strong a{
        color:black;
        text-decoration: none;
}
strong a:hover{
        color:blue;
}
.t2{
        margin-top: 40px;
        background: darkblue;
        text-align: center;
        font-size: 32px;
}
.t2:hover{
    background:green;
    color: fuchsia;
}
#especial{
    color:yellow;
    font-size: 20px;
}
		</style>
    </head>
    <body>
        <header>
            <h2>PROYECTO TEMA3 </h2> 
            <h2><a href="../212ProyectoDWES/indexProyectoDWES.php" >VOLVER</a></h2>
	<div class="caja1"></div>
	</header> 
        <main>
		<table class="default">
                    <tr class="c1">
			<th class="p1">0. Hola mundo y phpinfo().</th>
                        <td><a href="codigoPhp/Ejercicio00.php" >
			<img src="../images/play1.png" class="ver" width="40" height="40" ></td>
                        <td><a href="mostrarCodigo/mostrar00.php">
                        <img src="../images/codigo.png" class="ver" width="40" height="40" ></td>
                    </tr>
                    <tr class="c1">
			<th>1. Inicializar variables de los distintos tipos de datos básicos(string, int, float, bool) y mostrar los datos por pantalla (echo, print, printf, print_r, var_dump).</th>
                        <td><a href="codigoPhp/Ejercicio01.php" >
			<img src="../images/play1.png" class="ver" width="40" height="40" ></td>
                        <td><a href="mostrarCodigo/mostrar01.php">
                        <img src="../images/codigo.png" class="ver" width="40" height="40" ></td>
                    </tr>
                    <tr class="c1">
			<th>2. Inicializar y mostrar una variable heredoc.</th>
                        <td><a href="codigoPhp/Ejercicio02.php" >
			<img src="../images/play1.png" class="ver" width="40" height="40" ></td>
                        <td><a href="mostrarCodigo/mostrar02.php">
                        <img src="../images/codigo.png" class="ver" width="40" height="40" ></td>
                    </tr>
                    <tr class="c1">
			<td>3. Mostrar en tu página index la fecha y hora actual formateada en castellano. (Utilizar cuando sea posible la clase DateTime)</td>
                        <td><a href="codigoPhp/Ejercicio03.php" >
			<img src="../images/play1.png" class="ver" width="40" height="40" ></td>
                        <td><a href="mostrarCodigo/mostrar03.php">
                        <img src="../images/codigo.png" class="ver" width="40" height="40" ></td>
                    </tr>
                    <tr class="c1">
			<td>4. Mostrar en tu página index la fecha y hora actual en Oporto formateada en portugués</td>
                        <td><a href="codigoPhp/Ejercicio04.php" >
			<img src="../images/play1.png" class="ver" width="40" height="40" ></td>
                        <td><a href="mostrarCodigo/mostrar04.php">
                        <img src="../images/codigo.png" class="ver" width="40" height="40" ></td>
                    </tr>
                    <tr class="c1">
			<td>5. Inicializar y mostrar una variable que tiene una marca de tiempo (timestamp)</td>
                        <td><a href="codigoPhp/Ejercicio05.php" >
			<img src="../images/play1.png" class="ver" width="40" height="40" ></td>
                        <td><a href="mostrarCodigo/mostrar05.php">
                        <img src="../images/codigo.png" class="ver" width="40" height="40" ></td>
                    </tr>
                    <tr class="c1">
			<td>6. Operar con fechas: calcular la fecha y el día de la semana de dentro de 60 días.</td>
                        <td><a href="codigoPhp/Ejercicio06.php" >
			<img src="../images/play1.png" class="ver" width="40" height="40" ></td>
                        <td><a href="mostrarCodigo/mostrar06.php">
                        <img src="../images/codigo.png" class="ver" width="40" height="40" ></td>
                    </tr>
                    <tr class="c1">
			<td>7. Mostrar el nombre del fichero que se está ejecutando</td>
                        <td><a href="codigoPhp/Ejercicio07.php" >
			<img src="../images/play1.png" class="ver" width="40" height="40" ></td>
                        <td><a href="mostrarCodigo/mostrar07.php">
                        <img src="../images/codigo.png" class="ver" width="40" height="40" ></td>
                    </tr>
                    <tr class="c1">
			<td>8. Mostrar la dirección IP del equipo desde el que estás accediendo.</td>
                        <td><a href="codigoPhp/Ejercicio08.php" >
			<img src="../images/play1.png" class="ver" width="40" height="40" ></td>
                        <td><a href="mostrarCodigo/mostrar08.php">
                        <img src="../images/codigo.png" class="ver" width="40" height="40" ></td>
                    </tr>
                    <tr class="c1">
			<td>9. Mostrar el path donde se encuentra el fichero que se está ejecutando.</td>
                        <td><a href="codigoPhp/Ejercicio09.php" >
			<img src="../images/play1.png" class="ver" width="40" height="40" ></td>
                        <td><a href="mostrarCodigo/mostrar09.php">
                        <img src="../images/codigo.png" class="ver" width="40" height="40" ></td>
                    </tr>
                    <tr class="c1">
			<td>10. Mostrar el contenido del fichero que se está ejecutando.</td>
                        <td><a href="codigoPhp/Ejercicio10.php" >
			<img src="../images/play1.png" class="ver" width="40" height="40" ></td>
                        <td><a href="mostrarCodigo/mostrar10.php">
                        <img src="../images/codigo.png" class="ver" width="40" height="40" ></td>
                    </tr>
                    <tr class="c1">
			<td>11. Mostrar el documento PHPDoc del proyecto que se está ejecutando generado con PHP Documentor o ApiGen.</td>
                        <td><a href="phpDocumentor/index.html" >
			<img src="../images/play1.png" class="ver" width="40" height="40" ></td>
                    </tr>
                    <tr class="c1">
			<td>12. Mostrar el contenido de las variables superglobales (utilizando print_r() y foreach())</td>
                        <td><a href="codigoPhp/Ejercicio12.php" >
			<img src="../images/play1.png" class="ver" width="40" height="40" ></td>
                        <td><a href="mostrarCodigo/mostrar12.php">
                        <img src="../images/codigo.png" class="ver" width="40" height="40" ></td>
                    </tr>
                    <tr class="c1">
			<td>*13. Crear una función que cuente el número de visitas a la página actual desde una fecha concreta.*</td>
                    </tr>
                    <tr class="c1">
			<td>*14. Comprobar las librerías que estás utilizando en tu entorno de desarrollo y explotación. Crear tu propia librería de funciones y estudiar la forma de usarla en el entorno de desarrollo y en el de explotación*</td>
                    </tr>
                    <tr class="c1">
			<td>15. Crear e inicializar un array con el sueldo percibido de lunes a domingo. Recorrer el array para calcular el sueldo percibido durante la semana. (Array asociativo con los nombres de los días de la semana).</td>
                        <td><a href="codigoPhp/Ejercicio15.php" >
			<img src="../images/play1.png" class="ver" width="40" height="40" ></td>
                        <td><a href="mostrarCodigo/mostrar15.php">
                        <img src="../images/codigo.png" class="ver" width="40" height="40" ></td>
                    </tr>
                    <tr class="c1">
			<td>16. Recorrer el array anterior utilizando funciones para obtener el mismo resultado.</td>
                        <td><a href="codigoPhp/Ejercicio16.php" >
			<img src="../images/play1.png" class="ver" width="40" height="40" ></td>
                        <td><a href="mostrarCodigo/mostrar16.php">
                        <img src="../images/codigo.png" class="ver" width="40" height="40" ></td>
                    </tr>
                    <tr class="c1">
			<td>17. Inicializar un array (bidimensional con dos índices numéricos) donde almacenamos el nombre de las personas que tienen reservado el asiento en un teatro de 20 filas y 15 asientos por fila. (Inicializamos el array ocupando únicamente 5 asientos). Recorrer el array con distintas técnicas (foreach(), while(), for()) para mostrar los asientos ocupados en cada fila y las personas que lo ocupan.</td>
                        <td><a href="codigoPhp/Ejercicio17.php" >
			<img src="../images/play1.png" class="ver" width="40" height="40" ></td>
                        <td><a href="mostrarCodigo/mostrar17.php">
                        <img src="../images/codigo.png" class="ver" width="40" height="40" ></td>
                    </tr>
                    <tr class="c1">
			<td>18. Recorrer el array anterior utilizando funciones para obtener el mismo resultado</td>
			<td><a href="codigoPhp/Ejercicio18.php" >
			<img src="../images/play1.png" class="ver" width="40" height="40" ></td>
                        <td><a href="mostrarCodigo/mostrar18.php">
                        <img src="../images/codigo.png" class="ver" width="40" height="40" ></td>
                    </tr>
                    <tr class="c1">
			<td>*19. Construir una librería de funciones de validación de campos de formularios (LibreríaValidacionFormularios.php) para utilizarla en los siguientes ejercicios. Discusión: diferencia entre librería de funciones y clase.*</td>
                    </tr>
                    <tr class="c1">
			<td>*20. Convertir la LibreriaValidacionFormularios.php en una clase ValidacionFormularios.php. El profesor facilitará a los alumnos la clase AAMMDDValidacionFormularios.php desarrollada en el curso anterior como punto de partida.*</td>
                    </tr>
                    <tr class="c1">
			<td>21. Construir un formulario para recoger un cuestionario realizado a una persona y enviarlo a una página Tratamiento.php para que muestre las preguntas y las respuestas recogidas</td>
			<td><a href="codigoPhp/Ejercicio21.php" >
			<img src="../images/play1.png" class="ver" width="40" height="40" ></td>
                        <td><a href="mostrarCodigo/mostrar21.php">
                        <img src="../images/codigo.png" class="ver" width="40" height="40" ></td>
                    </tr>
                    <tr class="c1">
			<td>22. Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas recogidas.</td>
			<td><a href="codigoPhp/Ejercicio22.php" >
			<img src="../images/play1.png" class="ver" width="40" height="40" ></td>
                        <td><a href="mostrarCodigo/mostrar22.php">
                        <img src="../images/codigo.png" class="ver" width="40" height="40" ></td>
                    </tr>
                    <tr class="c1">
			<td>23. Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas recogidas; en el caso de que alguna respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente.</td>
                        <td><a href="codigoPhp/Ejercicio23.php" >
			<img src="../images/play1.png" class="ver" width="40" height="40" ></td>
                        <td><a href="mostrarCodigo/mostrar23.php">
                        <img src="../images/codigo.png" class="ver" width="40" height="40" ></td>
                    </tr>
                    <tr class="c1">
			<td>24. Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas recogidas; en el caso de que alguna respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente, pero las respuestas que habíamos tecleado correctamente aparecerán en el formulario y no tendremos que volver a teclearlas.</td>
                        <td><a href="codigoPhp/Ejercicio24_1.php" >
			<img src="../images/play1.png" class="ver" width="40" height="40" ></td>
                        <td><a href="mostrarCodigo/mostrar24.php">
                        <img src="../images/codigo.png" class="ver" width="40" height="40" ></td>
                    </tr>
                    <tr class="c1">
			<td>*25. Trabajar en PlantillaFormulario.php mi plantilla para hacer formularios como churros*</td>
                    </tr>
                    <tr id="especial">
			<td>Plantilla formulario Alberto</td>
                        <td><a href="https://daw207.ieslossauces.es/proyectoTema3/codigoPHP/ejercicio25.php" >
			<img src="../images/play1.png" class="ver" width="40" height="40" ></td>
                        <td><a href="https://daw207.ieslossauces.es/proyectoTema3/mostrarcodigo/muestraEjercicio25.php">
                        <img src="../images/codigo.png" class="ver" width="40" height="40" ></td>
                    </tr>
                    <tr id="especial">
			<td>Plantilla formulario Sonia</td>
                        <td><a href="https://daw219.ieslossauces.es/proyectoTema3/codigoPHP/ejercicio25.php" >
			<img src="../images/play1.png" class="ver" width="40" height="40" ></td>
                        <td><a href="https://daw219.ieslossauces.es/proyectoTema3/mostrarCodigo/muestraEjercicio24.php">
                        <img src="../images/codigo.png" class="ver" width="40" height="40" ></td>
                    </tr> 
                    <tr id="especial">
			<td>Plantilla formulario Oscar  </td>
                        <td><a href="https://daw214.ieslossauces.es/ProyectoTema3/codigoPHP/ejercicio25.php" >
			<img src="../images/play1.png" class="ver" width="40" height="40" ></td>
                        <td><a href="https://daw214.ieslossauces.es/ProyectoTema3/mostrarcodigo/muestraEjercicio25.php">
                        <img src="../images/codigo.png" class="ver" width="40" height="40" ></td>
                    </tr>
		</table>
        </main>
         <footer>
        2021-2022 I.E.S. Los sauces. ©Todos los derechos reservados. <strong> <a href="http://daw212.sauces.local/">Johanna Herrero Pozuelo</a></strong>
            <a href="https://github.com/JohannaHPSauces/212ProyectoTema3" target="blank"><img src="../images/git.png" alt="" class="git"></a>
        </footer>	
    </body>
</html>
