<!DOCTYPE html>
<html>
<head>
	<title>List Book</title>
	<link rel="stylesheet" type="text/css" href="<? echo base_url('assets/css/bootstrap.css');?>">
	<link rel="stylesheet" type="text/css" href="<? echo base_url('assets/css/style.css');?>">
</head>
<body>
	<div class="container-fluid">
		<div class="container">
			<div class="">Book Store</div><br>	
			<a href="<?=base_url('/book/create')?>">Add Book </a>
			<?php if(!empty($session->getFlashdata('success'))) { ?>
				<p style="color:green;"><?=$session->getFlashdata('success');?></p>
			<?php }  ?>
			<?php if(!empty($session->getFlashdata('error'))) { ?>
				<p style="color:red;"><?=$session->getFlashdata('error');?></p>
			<?php }  ?>
		</div><br>
		
		<div class="container">
			<table>
				<th>ID</th>
				<th>Name</th>
				<th>ISBN</th>
				<th>Auther</th>
				<th>Action</th>

				<?php
					if(!empty($books)){ 
						foreach ($books as $key => $value) {
						// echo $key; print_r($value); echo '<br>';
				?>
				<tr>
					<td><?=$value['id']?></td>
					<td><?=$value['name']?></td>
					<td><?=$value['isbn']?></td>
					<td><?=$value['auther']?></td>
					<td>
						<a href="<?=base_url('/book/edit/'.$value['id'])?>">edit</a> 
						<a href="#" onclick="deleteConfirm('<?=$value['id']?>')">delete</a>
					</td>
				</tr>
				<?php } }else{
					echo '<tr><td colspan="5">Records not found</td></tr>';
				} ?>
			</table>
		</div>
	</div>
	<script>
		function deleteConfirm(id){
			if(confirm('Are you sure to delete this record?')){
				window.location.href="<?=base_url('book/delete')?>/"+id;
			}
		}

	</script>
</body>
</html>