<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type = "text/css" href="<?= base_url(); ?>css/show.css">
	<title>Document</title>
</head>
<body>
	<h1>Product - <span><?= $row->id ?>&nbsp;<?= $row->name ?></span></h1>
	<form action="<?= base_url()?>products/show/<?= $row->id ?>" method="post">
		<label for="name">Name</label>
		<h3><?= $row->name ?></h3>
		<label for="desc">Description</label>
		<h3><?= $row->description ?></h3>
		<label for="price">Price</label>
		<h3><?= $row->price ?></h3>
		<a href="<?= base_url(); ?>products/edit/<?= $row->id; ?>">Edit</a>
		<a href="<?= base_url()?>products">Back</a>
	</form>
</body>
</html>


