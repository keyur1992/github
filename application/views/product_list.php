<!DOCTYPE html>
<html lang="en">  
<head>
<link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>
<div class="container">
<h2>List of <?php echo $title; ?></h2>
<hr />
<?php echo anchor('index.php/product/add','NEW PRODUCT'); ?>
<br/>
<br>
<table border="3" class="table">
	<thead>
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>NOTE</th>
			<th>PRICE</th>
			<th>STOCK</th>
			<th>EDIT</th>
			<th>DELETE</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($product_list as $list) { ?>
		<tr>
			<td><?php echo $list->id_item ?></td>
			<td><?php echo $list->item_name ?></td>
			<td><?php echo $list->note ?></td>
			<td><?php echo $list->price ?></td>
			<td><?php echo $list->stock.' '.$list->unit ?></td>
			<td> <?php echo anchor('index.php/product/edit/'.$list->id_item,'Edit') ?> </td>
			<td> <?php echo anchor('index.php/product/delete/'.$list->id_item,'Delete') ?></td>

		</tr>
		<?php	} 	?>	
	</tbody>
</table>
     <p class="footInfo"><a href="<?php echo base_url(); ?>index.php/users/login">Logout</a></p>
</div>
</body>
</html>