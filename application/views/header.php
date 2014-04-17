<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Menu</title>

	<link rel="stylesheet" href="<?= base_url()?>css/foundation.css" />
	<?php 
	if (isset($css_files)) {
		foreach($css_files as $file): ?>
		<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
	<?php endforeach; }?>
	<link rel="stylesheet" href="<?=base_url()?>css/flexslider.css">
	<link rel="stylesheet" href="<?= base_url()?>css/main.css" />
	<?php if(isset($js_files)) {
		foreach($js_files as $file): ?>
		<script src="<?php echo $file; ?>"></script>
	<?php endforeach; }?>
</head>
<body>