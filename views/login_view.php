<?php 
$this->load->view("header"); ?>

<div class="row">
	<div class="large-8 large-centered-columns">
		<h3>Iniciar sesión</h3>
		<?php echo form_open('admin/login'); ?>
		<?php echo validation_errors(); ?>
		<div class="row collapse" >
			<div class="large-6 columns large-centered">
				<input type="text" id="usuario" name="usuario" placeholder="Usuario"/>
			</div>
		</div>
		<div class="row collapse">
			<div class="large-6 columns large-centered">
				<input type="password" id="pass" name="pass" placeholder="Password"/>
				<input type="submit" class="large button expand" href="#" value="Entrar">
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
