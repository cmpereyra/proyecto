<?php
 include "db.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TuVocacion</title>
	<link rel="stylesheet" href="css/estilos.css"/>
	<link rel="stylesheet" href="css/estilosindex.css"/>
	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="estiloschat.css">
	<script type="text/javascript">
	function ajax(){
		var req = new XMLHttpRequest();

		req.onreadystatechange = function (){
			if(req.readyState  ==4&& req.status== 200 ){
				document.getElementById('chat').innerHTML = req.responseText;
			}
		 } 
		 req.open('GET','chat.php',true);
		 req.send();

		}
	setInterval(function(){ajax();},1000);
	</script>
	 
</head>
<body onload="ajax();">

       <nav>
			<ul>
				<li><a href="index.php">Inicio</a></li>
				<li><a href="#">Facultad</a>
 
				<div>
 
					<ul>
						<li class="titulo"><a href="derecho.html">Derecho</a></li>
						<li><a href="derecho.html">Carreras</a></li>
							
						<li><a href="maestrias.html">Maestria</a></li>
						
					</ul>
 
					<ul>
						<li class="titulo azul"><a href="economia.html">Economia</a></li>
						<li><a href="economia.html">Carreras</a></li>
						
						<li><a href="maestrias.html">Maestrias</a></li>
						
					</ul>
 
					<ul>
						<li class="titulo verde"><a href="medicina.html">Salud</a></li>
						<li><a href="medicina.html">Carreras</a></li>
						
						<li><a href="maestrias.html">Maestrias</a></li>
						
					</ul>
 
					<ul>
						<li class="titulo rojo"><a href="ingenieria.html">Ingenieria</a></li>
						<li><a href="ingenieria.html">Carreras</a></li>
						
						<li><a href="maestrias.html">Maestrias</a></li>
						
					</ul>
 
					<ul>
						<li class="titulo naranja"><a href="otrasfacu.html">Humanidades</a></li>
						<li><a href="otrasfacus.html">Carreras</a></li>
						
						<li><a href="maestrias.html">Maestrias</a></li>
						
					</ul>
				</div>
 
				</li>
				<li><a href="utu.html">UTU</a>
					
				</li>
				<li><a href="utec.html">UTEC</a></li>
				<li><a href="http://jovenesaprogramar.edu.uy/">Otro</a></li>
			</ul>
		</nav>

			
		<h2 class="blanco">Principales carreras</h2>





	<div class="right " id="contenedor">
		<div id="caja-chat">
			<div id="chat"></div>
		</div>
		<form method="POST" action="index.php">
			<input	type="text"	name="nombre" placeholder="Ingresa tu nombre">		
			<textarea name="mensaje" placeholder="Ingres tu mensaje" ></textarea>
			<input type="submit" name="enviar" value="Enviar">
		</form>
		<?php
		if (isset($_POST['enviar'])) {
			$nombre=$_POST['nombre'];
			$mensaje=$_POST['mensaje'];

			$consulta= "INSERT INTO chat (nombre,mensaje)VALUES ('$nombre','$mensaje')";
			$ejecutar= $conexion->query($consulta);


			if ($ejecutar) {
				echo "<embed loop='false' src='sonidomsn.mp3' hidden='true' autoplay='true'>";
			}
		}


		?>
	</div>
	<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="exampleModalLongTitle">descripcion</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="modalbody" class="modal-body">
							   
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							       
							      </div>
							    </div>
							  </div>
							</div>
	 <div class="	contenedor "> 			   
		      							  
				        <img src="imagenes/facueconomia.jpg" height="120" width="170x"/>
				        <p class="duracion">Duracion: 4 años- 360 cr</p>
				 		<h2>Contador Público</h2>

				 		<div class="estrellas">
								<a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
								<a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
								<a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
								<a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
								<a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
							</div>
							<noscript>Necesitas tener habilitado javascript para poder votar</noscript>

				 		<button onclick="cargarmodal('1')"type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalLong">
						  Descripcion</button>
						<p class="importante">*Esta carrera no acepta inscripciones con materias previas.</p>
			  			<p class="ubicacion">ubicacion: Av. Gonzalo Ramírez 1926</p>
			  			<p id="1"class="noseve">Esta actividad tiene una amplia repercusión social, como directo resultado de las responsabilidades que les confieren las leyes que establecen sus incumbencias profesionales, por el rol que juega en viabilizar el desarrollo y sustentabilidad de las pequeñas y medianas empresas y por su papel para el logro del manejo eficiente de los recursos del Sector Público

                        Quienes egresen de la carrera podrán centrar su campo de actuación en las áreas relativas a la información contable, el control, los aspectos tributarios y financieros de las organizaciones. Serán capaces de adecuar modelos, teorías y métodos a la realidad de las organizaciones nacionales e internacionales para alcanzar sistemas eficientes de información y control. </p>

		  </div>
		     <div class="contenedor utec"> 			   
		      							  
				        <img src="imagenes/utec.jpg" height="120" width="170"/>
				       <p class="duracion">Duracion: 4 años</p>

				       <h2 class="titulos">Ciencia y Tecnologia de Lacteos</h2>
				       <div class="estrellas">
								<a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
								<a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
								<a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
								<a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
								<a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
							</div>

				       <button onclick="cargarmodal('2')" type="button" class="btn btn-warning derecha" data-toggle="modal" data-target="#exampleModalLong">Descripcion</button>
				       <p class="importante">*Esta carrera no acepta inscripciones con materias previas.</p>
				       <p class="ubicacion">ubicacion: Laboratorios UTEC,La Paz, Colonia</p>
	 </div>
				 <p id="2"class="noseve">La Licenciatura en Ciencia y Tecnología de Lácteos es la primera carrera en el país que forma profesionales universitarios específicamente para la industria láctea.
			Con el fin de tener un rol protagónico en el procesamiento e industrialización de leche y productos lácteos, pone a disposición capacidades humanas y tecnológicas para colaborar en proyectos de investigación, desarrollo e innovación en lácteos.

				

			MODALIDAD:
			70% presencial –
			30% virtual
			TURNO:
			Vespertino</p>

		  </div>
		  <div class="contenedor"> 			   
		      							  
				        <img src="imagenes/facultadderecho.jpg" height="120" width="170"/>
				        <p class="duracion">Duracion: 5 años- 450 cr</p>
				 		<h2>Abogacía</h2>

				 		<div class="estrellas">
								<a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
								<a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
								<a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
								<a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
								<a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
							</div>
							<noscript>Necesitas tener habilitado javascript para poder votar</noscript>

				 		
				 		<button onclick="cargarmodal('3')"type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalLong">
						  Descripcion</button>


						
						<p class="importante">*Esta carrera no acepta inscripciones con materias previas.</p>
			  			<p class="ubicacion">ubicacion: Av. 18 de Julio 1824</p>

		  </div>
		  		<p id="3"class="noseve">El egresado de la Carrera de Abogacía es un profesional con sólidos conocimientos en la Ciencia Jurídica, en el marco normativo nacional e internacional, así como en la relación del Derecho con las Ciencias Sociales y Humanísticas en general, todo lo cual le permite desarrollar una capacidad analítica para resolver los problemas jurídicos con un enfoque humanista.

				En su formación adquiere habilidades y destrezas no sólo para el patrocinio judicial y el ejercicio de la Judicatura en situaciones de conflicto instaurado, sino también para el desarrollo de la abogacía preventiva, actuando como asesor, negociador o mediador.

				Carrera completa en Montevideo y Centro Universitario Regional Litoral Norte - Salto.
				En Paysandú se pueden realizar pasantías en Consultorio Jurídico.</p>
				<div class="contenedor utu"> 			   
		      							  
				        <img src="imagenes/utu.png" height="120" width="170"/>
				       <p class="duracion">Duracion: 2 años</p>

				       <h2 class="titulos">Electromecánica</h2>
				       <div class="estrellas">
								<a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
								<a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
								<a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
								<a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
								<a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
							</div>

				       <button onclick="cargarmodal('4')" type="button" class="btn btn-warning derecha" data-toggle="modal" data-target="#exampleModalLong">Descripcion</button>
				       <p class="importante">*Esta carrera no acepta inscripciones con ciclo basico incompleto.</p>
			  			<p class="ubicacion">ubicacion: Montevideo</p>
				       <p id="4"class="noseve">La Electromecanica es la combinacion de las ciencias  del electromagnetismo de la ingenieri electrica y la ciencia de la mecanica</p>
	 </div>
	 <div class="contenedor"> 			   
		      							  
				        <img src="imagenes/ingenieria.jpg" height="120" width="170	"/>
				        <p class="duracion">Duracion: 5 años - 450 cr</p>
				 		<h2>Ingeniería Civil</h2>

				 		<div class="estrellas">
								<a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
								<a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
								<a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
								<a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
								<a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
							</div>
							<noscript>Necesitas tener habilitado javascript para poder votar</noscript>
							
				 		<button onclick="cargarmodal('5')" type="button" class="btn btn-warning"data-toggle="modal" data-target="#exampleModalLong">Descripcion</button>
						<p class="importante">*Esta carrera no acepta inscripciones con materias previas.</p>
			  			<p class="ubicacion">ubicacion: Ave Julio Herrera y Reissig 565</p>
						<p id="5"class="noseve">Perfil del Ingeniero Civil Es el profesional que se dedica a la producción de bienes y servicios vinculados con las llamadas “obras civiles”, en forma eficiente y económica. Esta actividad se materializa fundamentalmente a través de la ejecución de diseños, la construcción de obras, la gestión, operación y mantenimiento de sistemas, la investigación y la gestión de recursos, entre otras. Su trabajo procura aumentar el bienestar social de la comunidad y el mejoramiento de la calidad de vida, preservando el medio ambiente y propiciando un correcto manejo de los recursos naturales.

                       Para cumplir correctamente las funciones señaladas, el ingeniero civil debe poseer una sólida formación básica científica y tecnológica -tanto teórica como experimental- que lo capacite para enfrentar no sólo los variados problemas con que se encontrará en el ejercicio profesional, sino también los renovados desafíos que implica el avance tecnológico en especial la posibilidad que dan las herramientas computacionales. Debe conocer asimismo la realidad nacional y en especial el medio donde actúa, para aplicar los procedimientos y metodologías adecuados desde el punto de vista técnico, social y económico, y debe además ser capaz de integrarse al trabajo de equipos multidisciplinarios.</p>
		  </div>
		  
              <script src="node_modules/jquery/dist/jquery.min.js"></script>
			  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
			 <script src="modal.js"></script>

</body>
</html>