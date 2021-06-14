<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Products Page</title>
	<link rel="stylesheet" type = "text/css" href="<?= base_url(); ?>css/products.css">

</head>
	<body>
		<h1>Products</h1>
		<table>
			<thead>
				<tr>
					<td>Name</td>
					<td>Description</td>
					<td>Price</td>
					<td>Actions</td>
				</tr>
			</thead>
			<tbody>
			<?php foreach($result as $row){ ?>
				<tr><?php $row->id; ?>
					<td><?= $row->name; ?></td>
					<td><?= $row->description; ?></td>
					<td><?= '$ ', $row->price; ?></td>
					<td>
					<a href="<?= base_url(); ?>products/show/<?= $row->id; ?>">Show</a>
					<a href="<?= base_url(); ?>products/edit/<?= $row->id; ?>">Edit</a>
					<a href="<?= base_url(); ?>products/destroy/<?= $row->id; ?>">Remove</a>
					</td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
		<div class="add_new">
			<a href="<?= base_url()?>products/new">Add a new product</a>
		</div>
	</body>
</html>