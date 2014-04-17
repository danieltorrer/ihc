<?php 
$this->load->view("header2"); ?>

<div class="row interior-white">
	<div class="large-12-cloumns">
		<?php echo $output; ?>
		<a href="<?=base_url()?>admin/salir">Salir</a>
	</div>
</div>

<script>
$(document).foundation();
</script>
</body>
</html>
