<header>
	<section id="top-bar">
		
	</section>
	<section id="header-align">
		<nav>
			<a href="index"><img src="img/logo.png" alt="" class="logo-header"></a>
			<ul class="menu-no-responsive">
				<li class="rojo"><a href="#">Ofertas Unicas</a></li>
				<li><a href="faq">FAQs</a></li>
				<li><a href="#">Contacto</a></li>
			</ul>
			<?php if(isset($_SESSION['usuario']) && isset($_SESSION['password'])) { ?>
			<section class="usuario-header">
				<figure><img src="uploads/avatars/<?php echo $_SESSION['avatar']; ?>" alt=""></figure>
				<div><?php echo $_SESSION['usuario']; ?> <i class="fa fa-angle-down" aria-hidden="true"></i>
					<ul>
						<li><i class="fa fa-user" aria-hidden="true"></i> Ver mi perfil</li>
						<a href="logout"><li><i class="fa fa-sign-out" aria-hidden="true"></i> Cerrar sesión</li></a>
					</ul>
				</div>
			</section>
			<?php } else { ?>
			<ul class="login-header">
				<li>
					<a href="login"><i class="fa fa-user" aria-hidden="true"></i> Conectarme </a>
				</li>			
				<li>
					<a href="registro"><i class="fa fa-user-plus" aria-hidden="true"></i> Registrarme</a>
				</li>
			</ul>
			<?php } ?>

			<div class="boton-responsive"><i class="fa fa-bars" aria-hidden="true"></i> asdasdsda</div>
		</nav>
		<div class="clear"></div>
		<section id="bottom-bar">
			<!-- Boton de categorias -->
			<div class="boton-categorias">
				<i class="fa fa-bars" aria-hidden="true"></i> Todas las Categorias

				<ul class="categorias-ul">
					<li>Consolas</li>
					<li>Celulares</li>
					<li>Audio & Música</li>
					<li>Notebooks</li>
					<li>Desktop</li>
					<li>Electrodomesticos</li>
					<li>Cámaras</li>
				</ul>
			</div>
	

			<!-- Buscar -->
			<div class="buscar-header">
				<form action="" method="GET">
					<input type="text" name="search" placeholder="Buscar productos">
					<button>
						<i class="fa fa-search" aria-hidden="true"></i>
					</button>
				</form>
			</div>

			<!-- Iconos -->
			<div class="iconos-header">
				<ul class="iconos">
					<!-- Favoritos -->
					<li>
						<i class="fa fa-heart-o" aria-hidden="true"></i>
						<div class="numero">0</div>
					</li>
					<!-- Carrito -->
					<li>
						<i class="fa fa-shopping-basket" aria-hidden="true"></i>
						<div class="numero">0</div>
					</li>
					<!-- Cantidad en carrito -->
					<li>
						<div class="carrito-item">Tu Carrito <br> <b>$0.00</b></div>
					</li>
				</ul>
			</div>
			<div class="clear"></div>
		</section>

	</section>
</header>