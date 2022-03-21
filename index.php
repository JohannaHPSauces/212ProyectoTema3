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
/*caja debajo de titulo*/
.caja1{
        background-color:red;
        border: 4px inset blue;
	border-radius: 35px 0px 35px 0px;
	-moz-border-radius: 35px 0px 35px 0px;
	-webkit-border-radius: 35px 0px 35px 0px;
}
			
			
			table {
				margin: 5rem auto;
			table-layout: fixed;
			width: 80%;
			height:100px;
			color:white;
			border-collapse: collapse;
			border: 4px solid black;
			text-align:left;
			padding:2px;
			}
			td{
                            background: darkorchid;
				text-align:left;
				border: 4px solid black;width:90px;
			}
th{
    background: purple;
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
		</style>
    </head>
    <body>
        <header>
            <h2>PROYECTO TEMA3 </h2> 
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
                    
		</table>
        </main>
         <footer>
        2021-2022 I.E.S. Los sauces. ©Todos los derechos reservados. <strong> <a href="http://daw212.sauces.local/">Johanna Herrero Pozuelo</a></strong>
            <a href="https://github.com/JohannaHPSauces/212ProyectoTema3" target="blank"><img src="../images/git.png" alt="" class="git"></a>
        </footer>	
    </body>
</html>
