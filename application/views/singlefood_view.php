<?php 
$this->load->view("header");
?>
	
	<div class="back">
		<span><a href="<?=base_url()?>menu/<?= $datos_item[0]["horario_comida"] ?>">←</a></span>
	</div>

	<div class="row">
		<div class="small-12 large-12 columns menu">
			<h2 class="title"><?= $datos_item[0]["horario_comida"] ?></h2>
		</div>
	</div>

	<div class="row description-container">
		<div class="small-12 large-8 medium-8 columns">
			<div class="row">
				<div class="small-12 large-12 columns name-item">
					<h2><?= $datos_item[0]["nombre"]; ?></h2>
				</div>
			</div>
			<div class="row">
				<div class="small-12 large-12 columns">
					<ul class="food-slider" data-orbit>
						<?php 
						if($datos_item[0]["imagen_1"] != ""){
							?>
							<li>
								<img src="<?=base_url()?>img/<?=$datos_item[0]['imagen_1']?>" alt="">
							</li>
							<?php
						}
						 ?>

						 	<?php 
						if($datos_item[0]["imagen_2"] != ""){
							?>
							<li>
								<img src="<?=base_url()?>img/<?=$datos_item[0]['imagen_2']?>" alt="">
							</li>
							<?php
						}
						 ?>

						 	<?php 
						if($datos_item[0]["imagen_3"] != ""){
							?>
							<li>
								<img src="<?=base_url()?>img/<?=$datos_item[0]['imagen_3']?>" alt="">
							</li>
							<?php
						}
						 ?>
					</ul>
				</div>
			</div>
		</div>

		<div class="small-12 large-4 medium-4 columns">
			<div>
				<h3>Ingredientes/Descrición</h3>
				<span class="descripcion"><?= $datos_item[0]["descripcion"]?></span>
				<h5>Precio: $ <?= $datos_item[0]["precio"]?></h5>
				<!--<input type="number" min="0" max="20" value="1">-->
			</div>
		</div>
		
		<div class="large-12 columns">
			<div>
				<img class="right boton" src="<?=base_url()?>img/agregar.png" alt="">
			</div>
		</div>

	</div>


	<!--<div class="total">
		<div class="row">
			<div class="small-6 large-6 columns">
				<div class="row">
					<div class="small-12 large-12 columns">
						<img src="<?=base_url()?>img/pedido.png" alt="">
					</div>
				</div>

				<img class="pedido-plato" src="<?=base_url()?>img/pedido2.png" alt="">
				<img class="pedido-plato" src="<?=base_url()?>img/pedido1.png" alt="">
				<img class="pedido-plato" src="<?=base_url()?>img/pedido3.png" alt="">
			</div>
			<div class="small-6 large-6 columns total-cont">
				<div class="">
					<img class="" src="<?=base_url()?>img/total.png" alt="">
				</div>
				<div class="">
					<a href="pedido.html"><img class="boton" src="<?=base_url()?>img/enviar.png" alt=""></a>
				</div>
			</div>
		</div>
	</div>-->


	<script src="<?=base_url()?>js/vendor/jquery.js"></script>
	<script src="<?=base_url()?>js/foundation.min.js"></script>
	<script>
	$(document).foundation('orbit', {
		animation: 'fade',
		pause_on_hover: false,
		resume_on_mouseout: false,
		animation_speed: 500,
		stack_on_small: true,
		navigation_arrows: false,
		slide_number: false,
		bullets: true,
		timer: false,
		next_on_click: false,
		variable_height: false
	})
	</script>
</body>
</html>
