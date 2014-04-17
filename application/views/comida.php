<?php 
$this->load->view("header");
?>
<div class="back">
	<span><a href="<?=base_url()?>">←</a></span>
</div>

<div class="row">
	
	<div class="small-12 large-12 columns menu">
		<h1 class="title"><?= $tipo?></h1>
	</div>
</div>

<div class="row interior">
	<div class="large-12 columns">
		<h4>Alimentos</h4>
		<div class="flexslider">
			<ul class="slides">
				<?php 

				 ?>
				<?php 
				foreach ($alimento as $food) {
					?>
					<li>
						<a href="<?=base_url()?>menu/item/<?= $food['id']?>">
							<img class="food-item" src="<?=base_url()?>img/<?=$food['icono']?>" >
						</a>
					</li>
					<?php
				}
				?>
			</ul>
		</div>
	</div>

	<div class="large-12 columns">
		<h4>Bebidas</h4>
		<div class="flexslider">
			<ul class="slides">
				<?php 
				foreach ($bebida as $drink) {
					?>
					<li>
						<a href="<?=base_url()?>menu/item/<?= $drink['id']?>">
							<img class="food-item" src="<?=base_url()?>img/<?=$drink['icono']?>" >
						</a>
					</li>
					<?php
				}
				?>
			</ul>
		</div>
	</div>
</div>

<!--<div class="total">
	<div class="row">
		<div class="small-6 large-6 columns">
			<div class="row">
				<div class="small- large-12 columns">
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
				<a href="pedido.html"><img src="<?=base_url()?>img/enviar.png" alt=""></a>
			</div>
		</div>
	</div>
</div>-->


<script src="<?=base_url()?>js/vendor/jquery.js"></script>
<script src="<?=base_url()?>js/foundation.min.js"></script>
<script src="<?=base_url()?>js/flexslider.js"></script>
<script>
$(window).load(function() {
	$('.flexslider').flexslider({
		animation: "slide",
		animationLoop: true,
		itemWidth: 100,
		itemMargin: 6,
		slideshow: false,
		touch : true
	});
});
</script>

</body>
</html>
