	<!-- Header -->
<?php

$item = null;
$valor = null;

$empresa = ControladorEmpresas::ctrMostrarEmpresas($item, $valor);
for ($i = 0; $i < count($empresa); $i++) {
  
}
?>
	<header class="header trans_300">

		<!-- Top Navigation -->
		<!-- Main Navigation -->
    <div class="top_nav">
			<div class="container">
				<div class="row">
					
				</div>
			</div>
		</div>

		<div class="main_nav_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container">
							<a href="home">TheColor<span>TintaYToner</span></a>
						</div>
						<nav class="navbar">
							<ul class="navbar_menu">
								<li><a href="home">Inicio</a></li>
								<li><a href="#prods-servs">Productos</a></li>
                <li><a href="#">Mas solicitados</a></li>
                <li><a href="#">Sucursales</a></li>
								<li><a href="contactanos">contacto</a></li>
							</ul>
							<ul class="navbar_user">
								<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
								<li class="checkout">
									<a href="#">
										<i class="fa fa-shopping-cart" aria-hidden="true"></i>
										<span id="checkout_items" class="checkout_items"></span>
									</a>
								</li>
							</ul>
							<div class="hamburger_container">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>

	</header>