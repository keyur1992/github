<!DOCTYPE html>
<html lang="en">  
<head>
<link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' />
<body>
<div class="container">
<h2>List of <?php echo $title; ?></h2>
<hr />
<?php echo anchor('product/add','NEW PRODUCT'); ?>
<br/>
<br>
<table border="1">
	<thead>
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>NOTE</th>
			<th>PRICE</th>
			<th>STOCK</th>
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
		</tr>
		<?php	} 	?>	
	</tbody>
</table>
     <p class="footInfo"><a href="<?php echo base_url(); ?>index.php/users/login">Logout</a></p>
</div>
</body>
</html>