<?php
	session_start();
	require_once('conexion.php');
?>
<html>
<head>
	<title> S-MART | Search, click, get it</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
	<link rel="stylesheet" href="http://meyerweb.com/eric/tools/css/reset/reset.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400,400i,700,700i,900" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://novativex.com/proyectos/smart/css/smart.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

	<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="plugins/wow/style.css" />
	<script type="text/javascript" src="plugins/wow/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->


</head>
<body>
	<?php include 'struct/header.php'; ?>


	<section id="banner">
		<!-- Start WOWSlider.com BODY section -->
		<div id="wowslider-container1">
		<div class="ws_images"><ul>
				<li><img src="img/portada.jpg" alt="portada" title="portada" id="wows1_0"/></li>
				<li><img src="img/portada2.jpg" alt="portada" title="portada" id="wows1_1"/></li>
			</ul></div>
			<div class="ws_bullets"><div>
		</div>
		<script type="text/javascript" src="plugins/wow/wowslider.js"></script>
		<script type="text/javascript" src="plugins/wow/script.js"></script>
		<!-- End WOWSlider.com BODY section -->
	</section>

	<section class="contenedor-index-home">

		<section class="new-arrivals-index">
			<div class="columna">

				<section class="oferts">
					<h2><strong>Ofertas</strong> de la semana</h2>
					<hr>
					<section class="precio">
						<h3>$450.65 <span>$550.89</span></h3>
						<h4>Lorem ipsum dolor sit amet</h4>

						<div class="save">
							<p>ahorras</p>
							<span>$99.50</span>
						</div>
					</section>

					<figure>
						<img src="https://www.cinchgaming.com/dev/wp-content/uploads/2017/03/XB1RW-Xbox-One-S-2.0-Controller-Stand-White-angle-5.jpg" alt="">
					</figure>

					<section class="stock">
						<p class="l">Disponibles: <b>25</b></p>
						<p class="r">Vendidos: <b>12</b></p>
					</section>

					<ul class="dias">
						<li>
							<div class="c" id="dias"></div>
							<p>Dias</p>
						</li>
						<li>
							<div class="c" id="horas"></div>
							<p>Horas</p>
						</li>
						<li>
							<div class="c" id="minutos"></div>
							<p>Min</p>
						</li>
						<li>
							<div class="c" id="segundos"></div>
							<p>Seg</p>
						</li>
					</ul>

					<script>
						// Set the date we're counting down to
						var countDownDate = new Date("May 16, 2018 15:37:25").getTime();

						// Update the count down every 1 second
						var x = setInterval(function() {
						  // Get todays date and time
						  var now = new Date().getTime();

						  // Find the distance between now an the count down date
						  var distance = countDownDate - now;

						  // Time calculations for days, hours, minutes and seconds
						  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
						  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
						  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
						  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

						  // Display the result in the element with id="demo"
						  document.getElementById("dias").innerHTML = days;
						  document.getElementById("horas").innerHTML = hours;
						  document.getElementById("minutos").innerHTML = minutes;
						  document.getElementById("segundos").innerHTML = seconds;

						  // If the count down is finished, write some text
						  if (distance < 0) {
						    clearInterval(x);
						    document.getElementById("demo").innerHTML = "EXPIRED";
						  }
						}, 1000);
					</script>

				</section>

				<section class="products">

					<ul class="options">
						<li id="b-ultimos-agregados" class="select">Últimos agregados</li>
						<li id="b-mas-vendidos">Más vendidos</li>
						<li id="b-en-oferta">En Oferta</li>
					</ul>

					<div class="ultimos-agregados">
						<ul class="products-ul ultimos-agregados">
							<li>
								<figure>
									<img src="https://compass-ssl.xbox.com/assets/e7/d4/e7d46aea-90d0-4bf1-9544-cc85d59f6d18.jpg?n=Xbox-Family_Home-Hero-0_FY-18-X1X-Lead_1067x667_02.jpg" alt="">
								</figure>
								<div class="price">
									$200.00
								</div>
								<p> Lorem ipsum dolor sit amet, consectetur.
								</p>
							</li>
							<li>
								<figure>
									<img src="https://compass-ssl.xbox.com/assets/e3/94/e394f9e9-2d36-4acb-9bc6-aeaab7b9149a.jpg?n=X1-Wireless-Controller-Blue_Gallery_1056x594_02.jpg" alt="">
								</figure>
								<div class="price">
									$200.00
								</div>
								<p> Lorem ipsum dolor sit amet, consectetur.
								</p>
							</li>
							<li>
								<figure>
									<img src="http://boxkeys.cg00kxmyj5j86z5rq.maxcdn-edge.com/wp-content/uploads/2017/04/3dc2b433-948f-4b80-9036-abf1d5a293aa.jpg" alt="">
								</figure>
								<div class="price">
									$200.00
								</div>
								<p> Lorem ipsum dolor sit amet, consectetur.
								</p>
							</li>
							<li>
								<figure>
									<img src="https://cdn.pji.nu/product/standard/800/3733657.jpg" alt="">
								</figure>
								<div class="price">
									$200.00
								</div>
								<p> Lorem ipsum dolor sit amet, consectetur.
								</p>
							</li>
							<li>
								<figure>
									<img src="https://http2.mlstatic.com/D_Q_NP_241725-MLA25466639755_032017-Q.jpg" alt="">
								</figure>
								<div class="price">
									$200.00
								</div>
								<p>Um dolor sitctetur.
								</p>
							</li>
							<li>
								<figure>
									<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSkrOt-dT68aF6ODk8CDYrklaFZbvgzK6xS0k-viNBhOiTOrrD8" alt="">
								</figure>
								<div class="price">
									$200.00
								</div>
								<p> Sor sit amet, consectetur.
								</p>
							</li>
							<li>
								<figure>
									<img src="https://www.cyberpuerta.mx/img/product/XL/CP-EAGLEWARRIOR-MOJ136US0G13EGW-1.jpg" alt="">
								</figure>
								<div class="price">
									$200.00
								</div>
								<p> Lorem consectetur.
								</p>
							</li>
							<li>
								<figure>
									<img src="https://i.gadgets360cdn.com/large/xbox_one_x_e3_2017_1497522853204.jpg?output-quality=80" alt="">
								</figure>
								<div class="price">
									$200.00
								</div>
								<p> Lorem ipsum dolor
								</p>
							</li>
							<li>
								<figure>
									<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7Sj9RruncuF4aisikIofzmzgqLwD9_C_PTCcITd2e9JBeUPFfoQ" alt="">
								</figure>
								<div class="price">
									$200.00
								</div>
								<p> Lorem ipsum dolor sit amet, consectetur.
								</p>
							</li>
							<li>
								<figure>
									<img src="https://static.acer.com/up/Resource/Acer/Professional/Product/Notebook/Chromebook/Image/20150120/Acer-Chromebook-11-C740-nontouch-sku-preview.png" alt="">
								</figure>
								<div class="price">
									$200.00
								</div>
								<p> Lorem ipsum dolor sit amet, consectetur.
								</p>
							</li>
						</ul>
					</div>
					<div class="mas-vendidos">
						<ul class="products-ul mas-vendidos">
							<li>
								<figure>
									<img src="http://www.infoteclaplata.com.ar/596/camara-digital-nikon-d3400-kit-18-55mm-vrii.jpg" alt="">
								</figure>
								<div class="price">
									$200.00
								</div>
								<p> Lorem ipsum dolor sit amet, consectetur.
								</p>
							</li>
							<li>
								<figure>
									<img src="https://www.ryrcomputacion.com/8998-large_default/PENDRIVE-64GB-2-0-SANDISK-CRUZER-FIT-Z33.jpg" alt="">
								</figure>
								<div class="price">
									$200.00
								</div>
								<p> Lorem ipsum dolor sit amet, consectetur.
								</p>
							</li>
							<li>
								<figure>
									<img src="https://www.cinchgaming.com/dev/wp-content/uploads/2017/03/XB1RW-Xbox-One-S-2.0-Controller-Stand-White-angle-5.jpg" alt="">
								</figure>
								<div class="price">
									$200.00
								</div>
								<p> Lorem ipsum dolor sit amet, consectetur.
								</p>
							</li>
							<li>
								<figure>
									<img src="https://i.gadgets360cdn.com/large/xbox_one_x_e3_2017_1497522853204.jpg?output-quality=80" alt="">
								</figure>
								<div class="price">
									$200.00
								</div>
								<p> Lorem ipsum dolor sit amet, consectetur.
								</p>
							</li>
							<li>
								<figure>
									<img src="https://d3nevzfk7ii3be.cloudfront.net/igi/iilvbVPNcUuTZEIt.large" alt="">
								</figure>
								<div class="price">
									$200.00
								</div>
								<p>Um dolor sitctetur.
								</p>
							</li>
							<li>
								<figure>
									<img src="https://static.acer.com/up/Resource/Acer/Professional/Product/Notebook/Chromebook/Image/20150120/Acer-Chromebook-11-C740-nontouch-sku-preview.png" alt="">
								</figure>
								<div class="price">
									$200.00
								</div>
								<p> Sor sit amet, consectetur.
								</p>
							</li>
							<li>
								<figure>
									<img src="http://www.infoteclaplata.com.ar/596/camara-digital-nikon-d3400-kit-18-55mm-vrii.jpg" alt="">
								</figure>
								<div class="price">
									$200.00
								</div>
								<p> Lorem consectetur.
								</p>
							</li>
							<li>
								<figure>
									<img src="https://i.gadgets360cdn.com/large/xbox_one_x_e3_2017_1497522853204.jpg?output-quality=80" alt="">
								</figure>
								<div class="price">
									$200.00
								</div>
								<p> Lorem ipsum dolor
								</p>
							</li>
							<li>
								<figure>
									<img src="https://d3nevzfk7ii3be.cloudfront.net/igi/iilvbVPNcUuTZEIt.large" alt="">
								</figure>
								<div class="price">
									$200.00
								</div>
								<p> Lorem ipsum dolor sit amet, consectetur.
								</p>
							</li>
							<li>
								<figure>
									<img src="https://static.acer.com/up/Resource/Acer/Professional/Product/Notebook/Chromebook/Image/20150120/Acer-Chromebook-11-C740-nontouch-sku-preview.png" alt="">
								</figure>
								<div class="price">
									$200.00
								</div>
								<p> Lorem ipsum dolor sit amet, consectetur.
								</p>
							</li>
						</ul>
					</div>
					<div class="en-oferta">
						<ul class="products-ul en-oferta">
							<li>
								<figure>
									<img src="https://home.ripley.cl/store/Attachment/WOP/D345/2000368345797/2000368345797_2.jpg" alt="">
								</figure>
								<div class="price">
									$200.00
								</div>
								<p> Lorem ipsum dolor sit amet, consectetur.
								</p>
							</li>
							<li>
								<figure>
									<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZTDiHE4NIZxI5GPlPRlRKEdTSWjJ03xdjHjwIspGin3PfPg6K" alt="">
								</figure>
								<div class="price">
									$200.00
								</div>
								<p> Lorem ipsum dolor sit amet, consectetur.
								</p>
							</li>
							<li>
								<figure>
									<img src="https://images-na.ssl-images-amazon.com/images/I/91qwl7MJCUL._SL1500_.jpg" alt="">
								</figure>
								<div class="price">
									$200.00
								</div>
								<p> Lorem ipsum dolor sit amet, consectetur.
								</p>
							</li>
							<li>
								<figure>
									<img src="https://images-na.ssl-images-amazon.com/images/I/A1DL5LiwXRL._SX355_.jpg" alt="">
								</figure>
								<div class="price">
									$200.00
								</div>
								<p> Lorem ipsum dolor sit amet, consectetur.
								</p>
							</li>
							<li>
								<figure>
									<img src="https://cdn.idealo.com/folder/Product/4056/4/4056425/s11_produktbild_gross/sony-playstation-4-ps4.png" alt="">
								</figure>
								<div class="price">
									$200.00
								</div>
								<p>Um dolor sitctetur.
								</p>
							</li>
							<li>
								<figure>
									<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQ4utoeFwgtnbTdKS6_wwLRW4XVwIkaIxHw73qhSSWp0AT1YIt" alt="">
								</figure>
								<div class="price">
									$200.00
								</div>
								<p> Sor sit amet, consectetur.
								</p>
							</li>
							<li>
								<figure>
									<img src="https://cdn.shopify.com/s/files/1/0409/7245/products/blue_60b9f736-d565-46fb-bc45-0805d4716233_1024x1024.jpg?v=1500995981" alt="">
								</figure>
								<div class="price">
									$200.00
								</div>
								<p> Lorem consectetur.
								</p>
							</li>
							<li>
								<figure>
									<img src="https://d3lfzbr90tctqz.cloudfront.net/epi/resource/r/gamepad-sony-dualshock-4-ps4-black/f6e11cf94864e628ccc700e395c27f5badff5e87d542ec55d8ef6a54310d6433_250" alt="">
								</figure>
								<div class="price">
									$200.00
								</div>
								<p> Lorem ipsum dolor
								</p>
							</li>
							<li>
								<figure>
									<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT3wKQ1dgRMJmthg8clo41FA2z7CM4H52D-SGGinOHDbCn4bQGbNA" alt="">
								</figure>
								<div class="price">
									$200.00
								</div>
								<p> Lorem ipsum dolor sit amet, consectetur.
								</p>
							</li>
							<li>
								<figure>
									<img src="https://images-na.ssl-images-amazon.com/images/I/71P8CgkVs3L._SL1500_.jpg" alt="">
								</figure>
								<div class="price">
									$200.00
								</div>
								<p> Lorem ipsum dolor sit amet, consectetur.
								</p>
							</li>
						</ul>
					</div>
				</section>
			</div>
		</section>

		<section class="app-banner">
			<p><i class="fa fa-mobile" aria-hidden="true"></i> Descargá nuestra app para celulares y busca lo que necesitas desde donde sea</p>

		</section>

		<section class="categorias">
			<h2>Nuestras Categorias</h2>

			<ul>
				<li>
					<figure><img src="https://media.flixcar.com/f360cdn/Samsung-1671551611-my-j2prime-g532g-sm-g532gzkdxme-dynamic-black-60642722-preview.png" alt=""></figure>

					<h3>Celulares</h3>
				</li>
				<li>
					<figure><img src="https://d243u7pon29hni.cloudfront.net/imagesOnDemand/get?imagePath=/images/products/auriculares-inalambricos-jbl-e45bt-bluetooth-autonomia-16h-microfono-blancos-13482991_l.png&width=480&height=480&quality=65&imgType=product" alt=""></figure>

					<h3>Audio & Musica</h3>
				</li>
				<li>
					<figure><img src="https://i0.wp.com/www.playsat.es/wp-content/uploads/2015/10/Reparar-MacBook-Pro-Retina-13-pulgadas-finales-2013.png?fit=420%2C420&ssl=1" alt=""></figure>

					<h3>Notebooks</h3>
				</li>
				<li>
					<figure><img src="https://www.officedepot.com.mx/backoffice/medias/desktop.png?context=bWFzdGVyfHJvb3R8NzA4OTN8aW1hZ2UvcG5nfGgxMS9oOTAvOTUzNzYwODc0NDk5MC5wbmd8MTg3ZWU0MzM5OTU0OGYyMWUzOTAxZTdiZWYwMjgzZjM2YzcyMWM1OGY3MTNhN2EyNTYzYzEyZjlhMmFmZmQ0Nw" alt=""></figure>

					<h3>Desktop</h3>
				</li>
				<li>
					<figure><img src="https://media.flixcar.com/f360cdn/Samsung-1671551611-my-j2prime-g532g-sm-g532gzkdxme-dynamic-black-60642722-preview.png" alt=""></figure>

					<h3>Celulares</h3>
				</li>
			</ul>
		</section>

	</section>

	<script
	  src="https://code.jquery.com/jquery-3.3.1.min.js"
	  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	  crossorigin="anonymous"></script>

	<script>



		$("#b-ultimos-agregados").click(function() {
			$('.en-oferta').hide();
			$('.mas-vendidos').hide();

		  	$(".ultimos-agregados").fadeIn("slow");
		    $('.ultimos-agregados').show();

		    $('#b-ultimos-agregados').addClass('select');
		    $('#b-en-oferta').removeClass('select');
		    $('#b-mas-vendidos').removeClass('select');
		});
		$("#b-mas-vendidos").click(function() {
			$('.en-oferta').hide();
			$('.ultimos-agregados').hide();

		  	$(".mas-vendidos").fadeIn("slow");
		    $('.mas-vendidos').show();

		    $('#b-ultimos-agregados').removeClass('select');
		    $('#b-en-oferta').removeClass('select');
		    $('#b-mas-vendidos').addClass('select');
		});
		$("#b-en-oferta").click(function() {
			$('.ultimos-agregados').hide();
			$('.mas-vendidos').hide();

		  	$(".en-oferta").fadeIn("slow");
		    $('.en-oferta').show();

		    $('#b-ultimos-agregados').removeClass('select');
		    $('#b-en-oferta').addClass('select');
		    $('#b-mas-vendidos').removeClass('select');
		});
	</script>


</body>
</html>
