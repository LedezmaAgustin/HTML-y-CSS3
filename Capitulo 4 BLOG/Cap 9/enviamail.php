

<!doctype HTML>
<html>
	<head manifest="/manifiesto/manifiesto.cache">
		<title>WebLog de Jose Vicente Carratala</title>
		<meta name="description" content="WebLog de Jose Vicente Carratala"/>
		<meta name="keywords" content="webLog,blog,Jose Vicente Carratala,diseño,multimedia"/>
		<meta http-equiv="refresh" content="50"/>
		<link rel="stylesheet" href="../css/all.css"/>

		<link rel=stylesheet href="css/estilo.css" type="text/css" />
	</head>
	<body>
		<div id="cajaheader">

		</div>
		<div id="principal" itempcope itemtype="http://www.data-vocabulary.org/Persona">
			<header id="cabesero">
				<div id="logo"></div>
				<h1><span itemprop="nam2">Jose Vicente Carratala</span></h1>
				<h2><span itemprop="title">Creativo Multimedia</span></h2>
				<nav>
					<ul>
						<li>
							<div id="inicio">
								<i class="fa-solid fa-circle-dot fa-2x"></i>
							</div>
							<a href="index.html">IconoInicio</a>
						</li>
						<li><a href="noticias.html"><canvas id="noticias" width="50" height="50" ></canvas><br />IconoNoticias</a></li>
						<li><a href="sobremihtml"><canvas id="sobreMi" width="50" height="50" ></canvas><br />IconoSobre mi</a></li>
						<li><a href="contacto.html"><canvas id="contacto" width="50" height="50" ></canvas><br />IconoContacto></a></li>	
					</ul>
				</nav>
			</header>
			<div id="contenido">

			<?php
header('Content-Type: text/html; charset=utf-8');
//Recibo las variables de formulario

$nombre=$_POST["nombre"];
$mail=$_POST["email"];
$mensaje=$_POST["mensaje"];

//Te muestro las variables

echo "<h3>El mensaje que has enviado es:</h3>";
echo "<br/>";	
echo "<p>Nombre: ";
echo $nombre;  
echo "<br/>";
echo "Email:";
echo $mail;
echo "<br/>";
echo "Mensaje:";
echo $mensaje;
echo "</p>";

//Envio un email
/*
$aquin="info@jocarsa.com";
$asunto="Has recibido un correo del Blog";
$mensajemail=$nombre."con el email".$mail."te ha enviado un mensaje que dice". $mensaje;

if(mail($aquien,$asunto,$mensaje);){

echo "Tu email se ha enviado correctamente";

	}else{
echo "El envio del mail ha fallado";
}
*/



?>	

			</div>
			<footer>
			
				<h6>
					<div class="vcard">
						<div> <span class="name">Jose Vicente Carratala</span>-<span class="locality">Mislata</span><span class="region">Valencia</span><span class="postal-code">46920</span>-<span class="country-name">España</span> </div>
						<div> <span class="tel">96 000 00 00</span>-<span class="email">info@jocarsa.com</span></div>
					</div>

				</h6>
				<script type="text/javascript">
				if(localStorage.pagecount) {localStorage.pagecount = Number(localStorage.pagecount)+1;}else{localStorage.pagecount = 1;}
				document.write("Has visitado mi pagina" +  localStorage.pagecount + "veces");
				</script>
				<scrit type="text/javasscript">
				if(sessionStorage.pagecount){sessionStorage.pagecount = Number (sessionStorage.pagecount)+1;}else{sesionStorage.pagecount = 1;}
				document.write("En está sesión,has visitado mi pagina :" + sessionStorage.pagecount + "veces");
			</scrit>
		</footer>
			
		</div>
	</body>
</html>
<script type="text/javascript">

	var micolor="Black";
	var miotrocolor="Grey";
	var mitercercolor="White";
	var escala=0.5;

	//Dibujo el icono Sobre Mi

	var c=document.getElementById("iconosobre mi");
	var cxt=c.getContext("2d");

	cxt.fillStyle=("micolor");
	cxt.beginPath();
	cxt.arc(escala*50,escala*25,escaka*20,0,Math.PI*2,true);
	cxt.closePath;
	cxt.fill();

	cxt.fillStyle=("micolor");
	cxt.beginPath();
	cxt.arc(escala*50,escala*90,escala*40,Math.PI*2,false);
	cxt.closePath;
	cxt.fill();

	//Dibujo el icono Contacto

	var c=document.getElementById("iconocontacto");
	var cxt=c.getContext("2d");

	cxt.fillStyle=("miotrocolor");
	cxt.beginPath();
	cxt.arc(50-10,25,20,0,Math.PI*2,true);
	cxt.closePath;
	cxt.fill();

	cxt.fillStyle=("miotrocolor");
	cxt.beginPath();
	cxt.arc(50-10,90,40,Math.PI*2,false);
	cxt.closePath;
	cxt.fill();

	//Dibujo el icono inicio

	var c=document.getElementById("iconoinicio");
	var cxt=c.getContext("2d");

	cxt.fillStyle=("micolor");
	cxt.beginPath();
	cxt.arc(50+10,25,20,0,Math.PI*2,true);
	cxt.closePath;
	cxt.fill();

	cxt.fillStyle=("micolor");
	cxt.beginPath();
	cxt.arc(50+10,90,40,Math.PI*2,false);
	cxt.closePath;
	cxt.fill();

	var c=document.getElementById("iconoinicio");
	var cxt=c.getContext("2d");

	cxt.fillStyle=("micolor");
	cxt.beginPath();
	cxt.arc(escala*50,escala*50,escala*40,0,Math.PI*2,true);
	cxt.closePath;
	cxt.fill();

	cxt.fillStyle=("mitercercolor");
	cxt.beginPath();
	cxt.arc(escala*50,escala*50,escala*30,0,Math.PI*2,true);
	cxt.closePath;
	cxt.fill();

	cxt.fillStyle=("micolor");
	cxt.beginPath();
	cxt.arc(escala*50,escala*50,escala*20,0,Math.PI*2,true);
	cxt.closePath;
	cxt.fill();

	//Dibujo el icono Noticias

	var c=document.getElementById("icononoticias");
	var cxt=c.getContext("2d");

	cxt.fillStyle=("micolor");
	cxt.beginPath();
	cxt.arc(escala*50,escala*50,escaka*20,0,Math.PI*2,true);
	cxt.closePath;
	cxt.fill();

	cxt.fillStyle=("micolor");
	cxt.beginPath();
	cxt.arc(escala*50,escala*50,escala*40,Math.PI*2,false);
	cxt.closePath;
	cxt.fill();

</script>