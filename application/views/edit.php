<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type = "text/css" href="<?= base_url(); ?>css/new.css">
	<title>Update</title>
</head>
<body>
	<h1>Edit Product <span><?= $row->id .' - '. $row->name ; ?></span></h1>
	<form action="<?= base_url()?>products/update/<?= $row->id?>" method="post"> 
		<label for="name">Name</label>
		<input type="text" name="name" value="<?= $row->name; ?>">
		<label for="desc">Decription</label>
		<input type="text" name="desc" value="<?= $row->description; ?>">
		<label for="price">Price</label>
		<input type="text" name="price" value="<?= $row->price; ?>">
		<input type="submit" value="Update">
		<a href="<?= base_url()?>products/show">Show</a> |
		<a href="<?= base_url()?>products">Back</a>
	</form>
</body>
</html>


