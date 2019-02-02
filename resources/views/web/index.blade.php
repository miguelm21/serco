<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="UTF-8">
		<link rel="shortcut icon" type="image/png" href="/favicon.png"/>
		<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
		<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
		<link rel="stylesheet" href="{{ asset('css/aos.css') }}">
		<link rel="stylesheet" href="{{ asset('css/swiper.css') }}">
		<link rel="stylesheet" href="{{ asset('css/owl.css') }}">
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
		<title>Serconit</title>
		<style>
	    	/* Always set the map height explicitly to define the size of the div
	    	* element that contains the map. */
	    	#map {
	    		height: 350px;
	    		width: 600px;
	    	}
	    </style>
	</head>
	<body id="inicio">
		<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#"><img class="imgLogo" data-aos="zoom-in" data-aos-duration="3000"  src="img/logo.png" alt="logotipo"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto mr-md-4">
					<li class="nav-item active text-center text-lg-left">
						<a class="nav-link pb-0" href="#inicio">Inicio <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item text-center text-lg-left">
						<a class="nav-link" href="#empresa">Nuestra Empresa</a>
					</li>
					<li class="nav-item text-center text-lg-left">
						<a class="nav-link" href="#servicios">Servicios</a>
					</li>
<!-- 					<li class="nav-item text-center text-lg-left">
						<a class="nav-link" href="#profesionales">Profesionales</a>
					</li> -->
					<li class="nav-item text-center text-lg-left">
						<a class="nav-link" href="#clientes">Clientes</a>
					</li>
					<!-- 					<li class="nav-item text-center text-lg-left">
						<a class="nav-link" href="herramientas.html">Herramientas</a>
					</li> -->
					<li class="nav-item text-center text-lg-left">
						<a class="nav-link" href="#contacto">Contáctanos</a>
					</li>
				</ul>
			</div>
		</nav>
		<img class="imgSlider animated fadeIn timeAnimated" src="img/inicio.png" alt="inicio">
<!-- 		<div class="layer animated fadeIn timeAnimated">
		</div> -->
		<section class="marginSection" id="noticias">
			<div class="container">
				<!-- <h2 class="text-center my-5">Noticias</h2>
				<p class="text-center text-muted">Duis aute irure dolor in reprehenderit in voluptate velit
					esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
				qui officia deserunt mollit anim id est laborum.</p> -->
				<div class="row">
					@foreach($news as $new)
						<div class="col-lg-4 col-md-12 mb-lg-0 mb-4 text-center">
							<div class="mb-4">
								<img class="imgNoti" src="{{ $new->image }}" alt="image">
								<a>
									<div class="mask rgba-white-slight"></div>
								</a>
							</div>
							<h4 class="font-weight-bold mb-3"><b>{{ $new->name }}</b></h4>
							<a href="{{ $new->url }}" target="_Blank" class="btn btn-1 text-white">Leer más</a>
						</div>
					@endforeach
					<!-- <div class="col-lg-4 col-md-12 mb-lg-0 mb-4 text-center">
						<div class="mb-4">
							<img class="imgNoti" src="img/empresa.jpg" alt="image">
							<a>
								<div class="mask rgba-white-slight"></div>
							</a>
						</div>
						<h4 class="font-weight-bold mb-3"><b>Facturación Electrónica</b></h4>
						<a href="https://www.dian.gov.co/fizcalizacioncontrol/herramienconsulta/FacturaElectronica/Presentacion/Paginas/Queesfacturaelectr%C3%B3nica.aspx" target="_Blank" class="btn btn-1 text-white">Leer más</a>
					</div>
					<div class="col-lg-4 col-md-6 mb-md-0 mb-4 text-center ">
						<div class="mb-4">
							<img class="imgNoti" src="img/empresa2.jpg" alt="image">
							<a>
								<div class="mask rgba-white-slight"></div>
							</a>
						</div>
						<h4 class="font-weight-bold mb-3"><b>Reporte de información exógena por el año gravable 2018</b></h4>
						
						<a href="http://www.comunidadcontable.com/BancoMedios/Documentos%20PDF/resoluci%C3%B3n%20011004%20de%2029-10-2018%20ex%C3%B3gena%20dian.pdf" target="_Blank" class="btn btn-1 text-white">Leer más</a>
					</div>
					<div class="col-lg-4 col-md-6 mb-0 text-center ">
						<div class="mb-4">
							<img class="imgNoti" src="img/empresa3.jpg" alt="image">
							<a>
								<div class="mask rgba-white-slight"></div>
							</a>
						</div>
						<h4 class="font-weight-bold mb-3"><b>Particularidades del RUT según el tipo de contribuyente</b></h4>
						
						<a href="http://www.secretariasenado.gov.co/senado/basedoc/estatuto_tributario_pr022.html#555-1" target="_Blank" class="btn btn-1 text-white">Leer más</a>
					</div> -->
				</div>
			</div>
		</section>
		<section class="marginSection" id="publicacion">
			<div class="container">
				<h2 class="text-center font-weight-bold my-5">Publicaciones</h2>
				<!-- <p class="text-center dark-grey-text w-responsive mx-auto mb-5">Duis aute irure dolor in reprehenderit in
					voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->
				<div class="row">
					<div class="col-lg-5 col-xl-4">
						<div class="mb-lg-0 mb-4 mt-md-2">
							<img class="imgNoti" src="img/empresa.jpg" alt="image">
							<a>
								<div class="mask rgba-white-slight"></div>
							</a>
						</div>
					</div>
					<div class="col-lg-7 col-xl-8 text-center text-md-left">
						<h3 class="font-weight-bold mb-3"><b>Calendario tributario</b></h3>
						<!-- <p class="dark-grey-text">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit
							quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus
						et aut officiis debitis cum soluta nobis est eligendi placeat facere aut rerum.</p>
						<p>por <a class="font-weight-bold">Melba Moreno</a>, 05/12/2018</p> -->
						<a href="https://www.accounter.co/wp-content/uploads/2018/09/282018-09-2129-Proyecto-Decreto-Plazos-para-declarar-y-pagar-an%CC%83o-2019.pdf" target="_Blank" class="btn btn-1 text-white">Leer más</a>
					</div>
				</div>
				<!-- <hr class="my-5"> -->
			</div>
		</section>
		<section class="marginSection" id="empresa">
			<!-- <h2 class="text-center my-5">Nuestra Compañia</h2> -->
			<div class="row">
				<div class="col-12 col-md-4 my-3 my-md-0">
					<div class="card cardModif">
						<div class="card-body heightCardBody">
							<h4 class="text-center">Grupo Serconit S.A.S</h4><br>
							<p class="card-text text-justify">Somos una Empresa de consultoría contable, financiera, y de sistemas especializada en la implementación de procesos de contabilidad y gestión digital on line, planificación tributaria, normas internacionales de información financiera, acompañamiento legal para emprendedores.</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-4 my-3 my-md-0">
					<div class="card cardModif">
						<div class="card-body heightCardBody">
							<h4 class="text-center">Misión</h4><br>
							<p class="card-text text-justify">Brindar servicios profesionales en tecnología y finanzas que faciliten la toma de decisiones oportunas y permita la sostenibilidad financiera y la transformación digital del mundo de los negocios.</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-4 my-3 my-md-0">
					<div class="card cardModif">
						<div class="card-body heightCardBody">
							<h4 class="text-center text-justify">Visión</h4><br>
							<p class="card-text">Ser transformadores de una cultura empresarial tradicional a la era digital en tecnología y finanzas.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="marginSection" id="servicios">
			<h2 class="text-center my-5">Servicios</h2>
			<div class="row">
				<div class="col-12 col-md-4 d-flex justify-content-center align-items-center">
					<img class="edificio" src="img/edificio.png" alt="edificio">
				</div>
				<div class="col-12 col-md-4">
					<ul class="none1 p-0">
						<li class="bgButton">ASESORIA TRIBUTARIA</li>
						<li class="bgButton">ASESORIA CONTABLE</li>
						<li class="bgButton">INSOLVENCIA ECONÓMICA</li>
						<li class="bgButton">AUDITORÍA FINANCIERA</li>
						<li class="bgButton">ATENCIÓN AL CLIENTE ON LINE</li>
						<li class="bgButton">ASESORÍA EN DISOLUCIÓN Y LIQUIDACIÓN DE SOCIEDADES</li>
						<li class="bgButton">IMPLEMENTACIÓN DE NÓMINA</li>
						<li class="bgButton">MEDIOS MAGNÉTICOS</li>
						<li class="bgButton">SISTEMATIZACIÓN DE EMPRESAS PÚBLICAS Y PRIVADAS</li>
						<li class="bgButton">IMPLEMENTACIÓN DE LAS NIIF Y NIAS</li>
					</ul>
				</div>
				<div class="col-12 col-md-4 d-flex justify-content-center align-items-center">
					<img class="edificio" src="img/edificio2.png" alt="edificio">
				</div>
			</div>
			<div class="">
				<div class="col-md-4 offset-md-4 text-center">
						<a class="btn bgButton btn-block text-white" id="opcion0" role="button"data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
							EQUIPAMIENTO DE SERVICIOS
						</a>
				</div>
				<div id="opcion0" style="height: auto; font-size: 12px;" class="boxOptions pt-3 ml-1 ocultar cero" aria-labelledby="opcion0">
					<div class="row">
						<div class="col-12 d-inline-flex">
							<div class=" text-center mx-auto border-dark border-right">
								<div class=" uno " aria-labelledby="opcion1">
									<div class="container">
										<h6 class="text-center titleDrop">Persona natural régimen simplificado</h6>
										<ul class="pl-1 text-left">
											<li><a href="form.html">Certificación de ingresos PN</a></li>
											<li>Asesoria contable</li>
											<li>Constitucón y creación de empresas</li>
										</ul>
									</div>
								</div>
							</div>
							<div class=" text-center mx-auto border-dark border-right">
								<div class="dos" aria-labelledby="opcion2">
									<div class="container">
										<h6 class="text-center titleDrop">Persona natural régimen común de</h6>
										<ul class="pl-1 text-left">
											<li>Certificación de ingresos PN</li>
											<li>Asesoria contable</li>
											<li>Renta</li>
											<li>Iva</li>
											<li>Impuestos y consumo</li>
											<li>Industria y comercio</li>
											<li>Implementación de NIIF y NIAS </li>
											<li>Medios magnéticos</li>
											<li>Constitucón y creación de empresas</li>
										</ul>
									</div>
								</div>
							</div>
							<div class=" text-center mx-auto border-dark border-right">
								<div class="tres" aria-labelledby="opcion3">
									<div class="container">
										<h6 class="text-center titleDrop">My pyme</h6>
										<ul class="pl-1 text-left">
											<li>Certificación de ingresos PN</li>
											<li>Certificación PJ</li>
											<li>Asesoria contable</li>
											<li>Renta</li>
											<li>Auditoría financiera</li>
											<li>Asesoría en disolución y liquidación de empresas</li>
											<li>Implementación de nómina</li>
											<li>Implementación de NIIF y NIAS </li>
											<li>Medios magnéticos</li>
											<li>Constitucón y creación de empresas</li>
											<li>Inventario físico de propiedad de planta y equipos</li>
										</ul>
									</div>
								</div>
							</div>
							<div class=" text-center mx-auto border-dark border-right">
								<div class="cuatro" aria-labelledby="opcion4">
									<div class="container">
										<h6 class="text-center titleDrop">Pyme</h6>
										<ul class="pl-1 text-left">
											<li>Certificación PJ</li>
											<li>Asesoria contable</li>
											<li>Revisoría fiscal</li>
											<li>Auditoría financiera</li>
											<li>Asesoría en disolución y liquidación de empresas</li>
											<li>Implementación de nómina</li>
											<li>Implementación de NIIF y NIAS </li>
											<li>Insolvencia económica</li>
											<li>Medios magnéticos</li>
											<li>Constitucón y creación de empresas</li>
											<li>Inventario físico de propiedad de planta y equipos</li>
										</ul>
									</div>
								</div>
							</div>
							<div class=" text-center mx-auto border-dark border-right">
								<div class="cinco" aria-labelledby="opcion5">
									<div class="container">
										<h6 class="text-center titleDrop">Corporaciónes</h6>
										<ul class="pl-1 text-left">
											<li>Certificación PJ</li>
											<li>Asesoria contable</li>
											<li>Constitucón y creación de empresas</li>
										</ul>
									</div>
								</div>
							</div>
							<div class=" text-center mx-auto border-dark border-right">
								<div class="seis" aria-labelledby="opcion6">
									<div class="container">
										<h6 class="text-center titleDrop">Entidades públicas</h6>
										<ul class="pl-1 text-left">
											<li>Certificación PJ</li>
											<li>Constitucón y creación de empresas</li>
										</ul>
									</div>
								</div>
							</div>
							<div class=" text-center mx-auto">
								<div class="siete" aria-labelledby="opcion7">
									<div class="container">
										<h6 class="text-center titleDrop">Esal</h6>
										<ul class="pl-1 text-left">
											<li>Certificación de ingresos PN</li>
											<li>Certificación PJ</li>
											<li>Asesoria contable</li>
											<li>Renta</li>
											<li>Auditoría financiera</li>
											<li>Asesoría en disolución y liquidación de empresas</li>
											<li>Implementación de nómina</li>
											<li>Implementación de NIIF y NIAS </li>
											<li>Medios magnéticos</li>
											<li>Constitucón y creación de empresas</li>
											<li>Inventario físico de propiedad de planta y equipos</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="marginSection" id="profesionales">
			<h2 class="text-center my-5">Nuestros Líderes</h2>
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="card shadow-lg">
							<div class="card-body maxhg4">
								<div class="text-center">
									<img class="imgEmployee" src="img/geovaldi.JPG" alt="employee">
									<h6 class="my-2">GEOVALDI DE JESÚS VANEGAS JIMÉNEZ <br>(Consultor Senior)</h6>
								</div>
								<p class="text-justify">Especialista en Sistematización de Empresas públicas y privadas. Revisoría fiscal y consultor tributario, mediana y grandes empresas, sector público y privado. Consultor NIIF, NIIF PYMES. NICSP.</p>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="card shadow-lg">
							<div class="card-body maxhg4">
								<div class="text-center">
									<img class="imgEmployee" src="img/MELBA.JPG" alt="employee">
									<h6 class="my-2">MELBA ROSA ROMERO PABÓN <br> (Consultor Senior)</h6>
								</div>
								<p class="text-justify">
									Contador Público Titulado, con especialización en Gestión Tributaria y Aduanera, egresada de la Universidad Cooperativa de Colombia.
								</p>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="card shadow-lg">
							<div class="card-body maxhg4">
								<div class="text-center">
									<img class="imgEmployee" src="img/NORELLI.JPG" alt="employee">
									<h6 class="my-2">NORELLIS DE JESÚS CASTAÑO MUNIVE <br> (Director Financiero)</h6>
								</div>
								<p class="text-justify">
									Asesor externo de “SERCONIT S.A.S”, Administradora de Empresas con énfasis en Mercadotecnia, Universidad Cooperativa de Colombia.
								</p>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="card shadow-lg">
							<div class="card-body maxhg4">
								<div class="text-center">
									<img class="imgEmployee" src="img/YENFRY.JPG" alt="employee">
									<h6 class="my-2">YENFRY JOSÉ MINDIOLA NORIEGA <br> (Desarrollador Senior)</h6>
								</div>
								<p class="text-justify">
									Ingeniero de sistemas Arquitecto y Desarrollador de sistemas de información web en PHP, javaescript,  y MySQL relacional.
								</p>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="card shadow-lg">
							<div class="card-body maxhg4">
								<div class="text-center">
									<img class="imgEmployee" src="img/alvaro.JPG" alt="employee">
									<h6 class="my-2">ALVARO RAFAEL GONZALEZ MEDINA <br> (Asesor)</h6>
								</div>
								<p class="text-justify">
									Asesor Contable y Financiero del grupo, Especialista en contabilidad, asesor tributario Pymes y persona Naturales, gestión comercial.
								</p>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="card shadow-lg">
							<div class="card-body maxhg4">
								<div class="text-center">
									<img class="imgEmployee" src="img/JOSE-POLO.JPG" alt="employee">
									<h6 class="my-2">JOSE ANTONIO POLO THOMAS <br> (Consultor Junior)</h6>
								</div>
								<p class="text-justify">
									Contador Público, egresado de la Universidad Cooperativa de Colombia, con diplomado en Comercio Exterior asuntos relacionados con Logística y Marketing. Especialista en contabilidad del sector público. Con Experiencia Certificada en levantamiento de inventario de propiedad planta y equipos y de Inventarios de consumo y de materiales bajo normas Internacionales de información financiera (NIIF) y bajo normas internacionales de Contabilidad del sector Público (NICSP). Experiencia en exportación e importación de bases de datos de archivos planos, carga de información financiera en plataformas regionales y nacionales como DIAN (exógena), Ministerio de Hacienda y crédito público (CHIP), Secretaria de Salud Departamental (SIHO), y Contaduría General de la Nación (CGN).
								</p>
							</div>
						</div>
					</div>
				</div>
				<div id="next" class="swiper-button-next"></div>
				<div id="prev" class="swiper-button-prev"></div>
				<br><br>
			</div>
		</section>
		<section class="container my-5" id="clientes">
			<h2 class="text-center my-5">Clientes</h2>
			<p class="grey-text text-center w-responsive mx-auto mb-5">
				Tras una larga trayectoria prestando nuestros servicios hemos tenido la oportunidad de trabajar en los diferentes sectores de la economía nacional tanto en el sector público como en el privado, obteniendo de ésta manera un amplio y profundo conocimiento de las necesidades que a cada uno es aplicable, lo que nos da la certeza de poder ofrecer un servicio de alta calidad y adecuado a las nuevas tecnologías y normatividad.
			</p>
			<div class="row">
				<div class="col-lg-7">
					<div class="card-body">
						<div class="row">
							<div class="col-12 col-md-6">
								<ul class="none1">
									<li>Sintramienergetica Nacional</li>
									<li>Asados La 30</li>
									<li>M Y M</li>
									<li>Boutique Atalia</li>
									<li>James Rodríguez Blanco</li>
									<li>Samarian Coffe Work Hostel</li>
									<li>Sedi Costa</li>
									<li>Bar y Restaurante Hemingway</li>
									<li>Restaurante la 80</li>
									<li>Vidrios para autos</li>
									<li>Fundación Ciudad Verde</li>
								</ul>
							</div>
							<div class="col-12 col-md-6">
								<ul class="none1">
									<li>Bisutería Andy Montes</li>
									<li>Agua Brisas Nevado</li>
									<li>P.S.I Seguridad Industrial, SAS</li>
									<li>Mariel Publicidad</li>
									<li>Correas Guayas y Ensambles</li>
									<li>Asincomex, SAS</li>
									<li>Diseños y Decoraciones </li>
									<li>Fistas y Eventos Kley</li>
									<li>Vaos Publicidad</li>
									<li>Fundación Manos Limpia Prevención y Seguridad</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-5">
					<img class="fondo2" src="img/fondo2.jpg" alt="imagen">
				</div>
			</div>
		</section>
		<section class="marginSection">
			<div class="owl-carousel owl-theme olw-loader container">
				<img class="item" src="img/grupo7.JPG" alt="image">
				<img class="item" src="img/grupo3.JPG" alt="image">
				<img class="item" src="img/grupo6.JPG" alt="image">
				<img class="item" src="img/grupo2.JPG" alt="image">
				<img class="item" src="img/grupo1.JPG" alt="image">
				<img class="item" src="img/grupo44.JPG" alt="image">
				<img class="item" src="img/grupo8.JPG" alt="image">
				<img class="item" src="img/grupo5.JPG" alt="image">
			</div>
			<h4 class="bg1 text-center container text-white">Comprometidos con ayudar a nuestro talento a liderar, desarrollar, flexibilizar y conectar</h4>
			<div class="text-center container mt-5">
				<!--Avatar-->
				<div class="avatar mx-auto mb-4">
					<img class="imgComent" src="img/ROCIO.JPG" class="rounded-circle img-fluid"
					alt="First sample avatar image">
				</div>
				<!--Content-->
				<p>
					<i class="fa fa-quote-left"></i> Según Rocio Romero, En el fondo, esta experiencia se trata de tener oportunidades ilimitadas para hacer un trabajo significativo y para crecer y aprender en cada momento de su carrera . Las personas en Serconit tienen la flexibilidad para crear la carrera y la experiencia de vida que quieren y el poder de ser parte de una red global de personas con talento<i class="fa fa-quote-right"></i>
				</p>
				<h4 class="font-weight-bold">Rocio Romero</h4>
				<br>
			</div>
		</section>
		<section class="my-5" id="contacto">
			<div class="container">
				<h2 class="h1-responsive font-weight-bold text-center my-5">Contáctanos</h2>
<!-- 				<p class="text-center w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
					Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam
				eum porro a pariatur veniam.</p> -->
				<div class="row">
					<div class="col-md-12 mb-md-0 mb-5">
						<form>
							<div class="row">
								<div class="col-md-6">
									<div class="md-form mb-0">
										<input type="text" id="form-contact-name" class="form-control">
										<label for="form-contact-name" class="">Nombre y apellido</label>
									</div>
								</div>
								<div class="col-md-6">
									<div class="md-form mb-0">
										<input type="text" id="form-contact-email" class="form-control">
										<label for="form-contact-email" class="">Código de servicio</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="md-form mb-0">
										<input type="text" id="form-contact-phone" class="form-control">
										<label for="form-contact-phone" class="">Teléfono ó correo</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="md-form mb-0">
										<textarea type="text" id="form-contact-message" class="form-control md-textarea" rows="3"></textarea>
										<label for="form-contact-message">Mensaje</label>
										<a class="btn-floating btn-lg blue">
											<i class="fa fa-send-o"></i>
										</a>
									</div>
								</div>
							</div>
						</form>
						<div class="text-right">
							<a class="btn btn-1 text-white">Enviar</a>
						</div>
					</div>
				</div>
			</div>
		</section>
	</body>
	<footer class="text-white hgFooter">
		<div class="row">
			<div class="col-12 col-md-8 py-3">
				<div class="row">
					<!-- <div class="col-12 col-md-12">
						<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&source=s_q&hl=en&geocode=&q=15+Springfield+Way,+Hythe,+CT21+5SH&aq=t&sll=52.8382,-2.327815&sspn=8.047465,13.666992&ie=UTF8&hq=&hnear=15+Springfield+Way,+Hythe+CT21+5SH,+United+Kingdom&t=m&z=14&ll=51.077429,1.121722&output=embed"></iframe>
					</div> -->
					<div id="map" heigth="200px"></div>
				</div>
			</div>
			<div class="col-12 col-md-4 text-center text-md-left">
				<div class="text-white">
					<h3 class="my-4 pb-2">Dirección oficinas Colombia</h3>
					<ul class="text-lg-left list-unstyled">
						<li onclick="initMap(11.241250, -74.212820)">
							<p class="pointerClick">
								<i class="fa fa-map-marker pr-2"></i>
								<b>Santa Marta:</b> <br> Calle 21 N° 3-16 Local N° 01
							</p>
						</li>
						<li onclick="initMap(6.256698, -75.595742)">
							<p class="pointerClick">
								<i class="fa fa-map-marker pr-2"></i>
								<b>Medellín:</b> <br> Carrera 77B N° 47-35
							</p>
						</li>
						<li>
							<p class="pointerClick">
								<i class="fa fa-map-marker pr-2"></i>
								<b>Barranquilla:</b> <br> Calle 34 N° 44-63 oficina 9A
							</p>
						</li>
					</ul>
					<hr class="hr-light my-4">
					<ul class="list-inline text-center list-unstyled">
						<li class="list-inline-item">
							<a href="#" class="p-2 fa-lg tw-ic">
								<i class="fab fa-twitter text-white"></i>
							</a>
						</li>
						<li class="list-inline-item">
							<a href="#" class="p-2 fa-lg li-ic">
								<i class="fab fa-facebook-f text-white"></i>
							</a>
						</li>
						<li class="list-inline-item">
							<a href="#" class="p-2 fa-lg ins-ic">
								<i class="fab fa-instagram text-white"></i>
							</a>
						</li>
						<li class="list-inline-item">
							<a href="#" class="p-2 fa-lg ins-ic">
								<i class="fab fa-google-plus-g text-white"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="text-center py-2">Todos los derechos reservados</div>
	</footer>
	<script src="js/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="{{ asset('js/bootstrap.') }}"></script>
	<script src="{{ asset('js/aos.js') }}"></script>
	<script src="{{ asset('js/swiper.js') }}"></script>
	<script src="{{ asset('js/owl.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
	<script>
	AOS.init();
	</script>
	<script>
	var swiper = new Swiper('.swiper-container', {
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		slidesPerView: 3,
		spaceBetween: 30,
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
		},
		breakpoints: {
			1024: {
				slidesPerView: 4,
				spaceBetween: 40,
			},
			768: {
				slidesPerView: 3,
				spaceBetween: 30,
			},
			640: {
				slidesPerView: 1,
				spaceBetween: 20,
			},
			320: {
				slidesPerView: 1,
				spaceBetween: 10,
			}
		}
	});
	</script>
	<script>
      var map;
      var google;

      initMap(latitude, longitude);

      function initMap(latitude, longitude) {
      	if(!latitude) {
      		latitude = 11.241250;

      	}
      	if(!longitude) {
      		longitude = -74.212820;
      	}

        map = new google.maps.Map(document.getElementById('map'), {
          center: { lat: latitude, lng: longitude },
          zoom: 8
        });

        var marker = new google.maps.Marker({
		    position:{ lat: latitude, lng: longitude },
		    map: map
		    /*title: 'Hello World!'
*/		});

        marker.setMap(map);
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6fPgPWsp99G79huy94MHqy5JCpvQwq9E&callback=initMap"
    async defer></script>
</html>