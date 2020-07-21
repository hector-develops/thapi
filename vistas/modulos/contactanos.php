<div class="container contact_container">
		<div class="row">
			<div class="col">

				<!-- Breadcrumbs -->

				<div class="breadcrumbs d-flex flex-row align-items-center">
					<ul>
						<li><a href="home">Inicio</a></li>
						<li class="active"><a href="contactanos"><i class="fa fa-angle-right" aria-hidden="true"></i>Contacto</a></li>
					</ul>
				</div>

			</div>
		</div>

		<!-- Map Container -->

		<div class="row">
			<div class="col">
				<div id="google_map">
					<div class="map_container">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d930.4198531755455!2d-101.68164287081211!3d21.125343650096564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842bbf0c55dbbf97%3A0x4251ffe644b33e5c!2sBlvd.%20L%C3%B3pez%20Mateos%20Pte.%20106%2C%20Obregon%2C%2037320%20Le%C3%B3n%2C%20Gto.!5e0!3m2!1ses!2smx!4v1593742158171!5m2!1ses!2smx" width="1200" height="800" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
				</div>
			</div>
		</div>
		<?php

			$item = null;
			$valor = null;

			$empresa = ControladorEmpresas::ctrMostrarEmpresas($item, $valor);
			for ($i = 0; $i < count($empresa); $i++) {
			
			

			?>
		<!-- Contact Us -->

		<div class="row">

			<div class="col-lg-6 contact_col">
				<div class="contact_contents">
					<h1>¡Contactanos!</h1>
					<p></p>
					<div>
						<p>Telefono: <?php echo $empresa[$i]["telefono"];  ?></p>
						<p>Correo: <?php echo $empresa[$i]["correo"];  }?></p>
					</div>
					<!-- Contact Us 
					<div>
						<p>mm</p>
					</div>
					<div>
						<p>Open hours: 8.00-18.00 Mon-Fri</p>
						<p>Sunday: Closed</p>
					</div>
					-->
				</div>

			</div>

			<div class="col-lg-6 get_in_touch_col">
				<div class="get_in_touch_contents">
					<h1>¡Escribe un correo!</h1>
					<p></p>
					<form action="post">
						<div>
							<input id="input_name" class="form_input input_name input_ph" type="text" name="name" placeholder="Name" required="required" data-error="Name is required.">
							<input id="input_email" class="form_input input_email input_ph" type="email" name="email" placeholder="Email" required="required" data-error="Valid email is required.">
							<textarea id="input_message" class="input_ph input_message" name="message"  placeholder="Message" rows="3" required data-error="Please, write us a message."></textarea>
						</div>
						<div>
							<button id="review_submit" type="submit" class="red_button message_submit_btn trans_300" value="Submit">Enviar</button>
						</div>
					</form>
				</div>
			</div>

		</div>
	</div>
