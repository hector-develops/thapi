<?php

$item = null; $valor = null;
$empresa = ControladorEmpresas::ctrMostrarEmpresas($item, $valor);
for ($i=0; $i < count($empresa); $i++) { 

?>
  
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
						<ul class="footer_nav">
							<li><a href="home">Inicio</a></li>
							<li><a href="#prods-servs">Productos</a></li>
							<li><a href="contactanos">Contactanos</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
						<ul>
							<li><a href="<?php echo $empresa[$i]["facebook_empresa"];  ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="<?php echo $empresa[$i]["instagram_empresa"];  ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="<?php echo $empresa[$i]["facebook_empresa"]; } ?>"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="footer_nav_container">
						<div class="cr">©2020 All Rights Reserverd.<a href="#"></a></div>
					</div>
				</div>
			</div>
		</div>
	</footer>