<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type = "text/css" href="<?= base_url(); ?>css/new.css">
	<title>Add a new product</title>
</head>
<body>
	<h1>Add a new product</h1>
	<form action="<?= base_url()?>products/create" method="post">
		<label for="name">Name</label>
		<input type="text" name="name" >
		<label for="desc">Decription</label>
		<input type="text" name="description" >
		<label for="price">Price</label>
		<input type="text" name="price" >
		<input type="submit" name="submit" value="Create">
		<a href="<?= base_url()?>products">go back</a>
	</form>
</body>
</html>


