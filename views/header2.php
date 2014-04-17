<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Menu</title>

	<?php 
	if (isset($css_files)) {
		foreach($css_files as $file): ?>
		<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
	<?php endforeach; }?>
	<?php if(isset($js_files)) {
		foreach($js_files as $file): ?>
		<script src="<?php echo $file; ?>"></script>
	<?php endforeach; }?>
	<link rel="stylesheet" href="<?= base_url()?>css/main.css" />
	<script src="<?= base_url()?>js/foundation.min.js"></script>
</head>
<body>