<?php 
$this->load->view("header");
?>


	<div class="middle-parent">
		<div class="middle-content">
			<div class="row">
				<div class="small-12 large-12 columns menu">
					<img src="img/menu.png" alt="">
				</div>
			</div>
			
			<div class="row">
				<div class="small-4 large-4 columns">
					<a href="<?=base_url()?>menu/desayuno"><img src="<?= base_url()?>img/desayuno1.png" alt=""></a>
					<div class="title">
						<a href="comida.html"><img class="title" src="<?= base_url()?>img/desayuno2.png" alt=""></a>
					</div>
				</div>
				<div class="small-4 large-4 columns">
					<a href="<?=base_url()?>menu/comida"><img src="<?= base_url()?>img/comida1.png" alt=""></a>
					<div class="title">
						<a href="#"><img class="title" src="<?= base_url()?>img/comida2.png" alt=""></a>
					</div>
				</div>
				<div class="small-4 large-4 columns">
					<a href="<?=base_url()?>menu/cena"><img src="<?= base_url()?>img/cena.png" alt=""></a>
					<div class="title">
						<a href="#"><img class="title" src="<?= base_url()?>img/c1.png" alt=""></a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="<?= base_url()?>js/vendor/jquery.js"></script>
	<script src="<?= base_url()?>js/foundation.min.js"></script>
	<script>
	$(document).foundation();
	</script>
</body>
</html>
