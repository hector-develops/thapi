<?php

    $item = null;
    $valor = null;

    $empresa = ControladorEmpresas::ctrMostrarEmpresas($item, $valor);
    for ($i = 0; $i < count($empresa); $i++) {
      
    
    ?>
  <!-- Page Header -->
<a class="circle button"  id="whatsapp" href="https://api.whatsapp.com/send?phone=<?php echo $empresa[$i]["celular_empresa"];  ?>"><img src="vistas/dist/img/wps/whatsapp.png" alt=""></a>
<div class="super_container">

	<div class="fs_menu_overlay"></div>
	<div class="hamburger_menu">
		<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="hamburger_menu_content text-right">
			<ul class="menu_top_nav">
				<li class="menu_item"><a href="home">Inicio</a></li>
				<li class="menu_item"><a href="#prods-servs">Productos</a></li>
        <li class="menu_item"><a href="#moreVendidos">Mas vendidos</a></li>
        <li class="menu_item"><a href="#">Sucursales</a></li>
				<li class="menu_item"><a href="#">Login</a></li>
				<li class="menu_item"><a href="contactanos">contacto</a></li>
			</ul>
		</div>
	</div>
  
	<!-- Slider -->
	<div class="main_slider"><img class="imgMobile" id="imgMobile" src="vistas/dist/img/logo2.jpeg">
		<div class="container fill_height">
			<div class="row align-items-center fill_height">
				<div class="col">
					<div class="main_slider_content">
						<h2><?php echo $empresa[$i]["titulo_inicio"]; } ?> </h2>
						<div class="red_button shop_now_button"><a href="#prods-servs">Ver mas..</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- New Arrivals -->

	<div class="new_arrivals" id="prods-servs">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>Productos Y Servicios</h2>
					</div>
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col text-center">
					<div class="new_arrivals_sorting">
						<ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked" data-filter="*">Todos</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".1">Productos</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".2">Servicios</li>
							
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>
        <?php

          $item = null;
          $valor = null;
          $value1="http://localhost/backend/";
          $productos = ProductosInicio::ctrMostrarProductos($item, $valor);

          	foreach ($productos as $key => $value){
            
  
						echo'<div class="product-item '.$value["fk_categoria"].'">
								<div class="product discount product_filter">
										<div class="product_image">
											<img src="'.$value1.''.$value["foto"].'" alt="">
									</div>
									<div class="favorite favorite_left"></div>
									<div class="product_info">
										<h6 class="product_name"><a href="#">'.$value["nombre_producto"].'</a></h6>
										<div class="">Codigo:<span></span> '.$value["codigo_producto"].'</div>
										<div class="product_price">$'.$value["precio_venta"].'</div>
									</div>
								</div>
           					</div>';
            }
        ?> 
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Best Sellers -->

	<div class="best_sellers" id="moreVendidos">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>¡Promociones y mas vendidos!</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="product_slider_container">
						<div class="owl-carousel owl-theme product_slider">
							
							<!-- Slide 2 -->
              				
					<?php

							$item = null;
							$valor = null;
							$value1="http://localhost/backend/";
							$prodPromos = ProductosInicio::ctrMostrarProd($item, $valor);

							foreach ($prodPromos as $key => $value){

							

							echo'<div class="owl-item product_slider_item">
							<div class="product-item '.$value["fk_categoria"].'">
									<div class="product product_filter">
												<div class="product_image">
													<img src="'.$value1.''.$value["foto"].'" alt="">
												</div>
											<div class="favorite"></div>
											<div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center"><span>new</span></div>
										<div class="product_info">
											<h6 class="product_name"><a href="">'.$value["nombre_producto"].'</a></h6>
											<div class="product_price">$'.$value["precio_venta"].'</div>
										</div>
									</div>
									</div>
								</div>';
							}
						?> 
						
						</div>		

						<!-- Slider Navigation -->

						<div class="product_slider_nav_left product_slider_nav d-flex align-items-center justify-content-center flex-column">
							<i class="fa fa-chevron-left" aria-hidden="true"></i>
						</div>
						<div class="product_slider_nav_right product_slider_nav d-flex align-items-center justify-content-center flex-column">
							<i class="fa fa-chevron-right" aria-hidden="true"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>