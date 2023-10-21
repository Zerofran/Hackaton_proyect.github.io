<?php
// Iniciar la sesión
session_start();

// Verificar si la sesión está iniciada
if (isset($_SESSION['usuario'])) {
    $urlDestino = "1true";
} else {
    $urlDestino = "0false";
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Chat de Ayuda</title>

	<!-- aqui se linquea hacia la hoja de estilos .css -->
	<link rel="stylesheet" type="text/css" href="../CSS/chatbot.css">
	<!--Links para las fuentes-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
</head>
<body>
	<!--HEADER - MENU-->

	<header>
		<div class="container__header">
			<div class="logo">
				<a href="p_principal.php">
					<img src="../IMG/logo.png" alt="">
				</a>
			</div>

	        <!-- Agregar aquí el botón de menú hamburguesa -->
	        <div class="menu-toggle">
	            <div class="bar"></div>
	            <div class="bar"></div>
	            <div class="bar"></div>
	        </div>
	        <!-- Fin del botón de menú hamburguesa -->

			<div class="menu"> 
				<nav>
					<ul>
						<li><a href="#" id="chatbot">Preguntame!</a></li>
						<li><a href="#" id="hoteles">Hoteles</a></li>
						<li><a href="#" id="restaurantes">Restaurantes</a></li>
						<li><a href="#" id="gastronomia">Gastronomía</a></li>
						<li><a href="#" id="museo">Museos</a></li>
						<li><a href="#" id="rutas">Rutas</a></li>
					</ul>
				</nav>
				
				<div class="socialMedia">
					<a href="#" id="ajustes">
						<img src="../IMG/user.png" alt="">
					</a>
				</div>
			</div>

		</div>
	</header>

	<!--Portada de incio-->
	<main>
		<div class="container__cover div__offset">
			<div id="chat_container">
				<h1 id="HelpTitle">¿En qué puedo ayudarte?</h1>
				<div id="chatbox">
					<p id="output"></p>
				</div>
				<!--  Esta es la parte del texto que corresponde al chatbot con la api de OpenAI -->
				<input type="text" placeholder="Escribe tus dudas" id="prompt">
				<button id="generate">Generate</button>
			</div>
<		</div>	
	</main>
  <script src="../JS/chatbot.js"></script>
  <script type="text/javascript" src="../JS/menuAmburgesa.js"></script>
  <script>
		document.addEventListener("DOMContentLoaded", function () {
		// Obtener todas las etiquetas <a> que quieres cambiar
		const chatbot = document.getElementById("chatbot");
		const hoteles = document.getElementById("hoteles");
		const restaurantes = document.getElementById("restaurantes");
		const gastronomia = document.getElementById("gastronomia");
		const museo = document.getElementById("museo");
		const rutas = document.getElementById("rutas"); 
		const ajustes = document.getElementById("ajustes");

		// Verificar el valor de urlDestino
		var urlDestino = "<?php echo $urlDestino; ?>";

		if (urlDestino === "1true") {
			// Cambiar la URL para el enlace chatbot
			chatbot.href = "chatbot.php";

			// Cambiar la URL para el enlace hoteles
			hoteles.href = "../HTML/header_botones/hoteles/mostrar_producto.php";

			// Cambiar la URL para el enlace restaurantes
			restaurantes.href = "URL_si_sesion_iniciada.php";

			gastronomia.href = "URL_si_sesion_iniciada.php";

			museo.href = "URL_si_sesion_iniciada.php";

			rutas.href = "rutas.php";

			ajustes.href = "admin/ajustes.php";

		} 
		else if (urlDestino === "0false") {
			alert('se requiere una cuenta para permisos superiores')
			// Cambiar la URL para el enlace chatbot
			chatbot.href = "../index.php";

			// Cambiar la URL para el enlace hoteles
			hoteles.href = "../index.php";

			// Cambiar la URL para el enlace restaurantes
			restaurantes.href = "../index.php";

			gastronomia.href = "../index.php";

			museo.href = "../index.php";

			rutas.href = "../index.php";	

			ajustes.href = "admin/ajustes.php";	    
		}
	});
	</script>
</body>
</html>