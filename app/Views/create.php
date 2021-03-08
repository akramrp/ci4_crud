<!DOCTYPE html>
<html>
<head>
	<title>create book</title>
</head>
<body>
	<h2>create book</h2>
	<form  method="post">
		Name <input type="text" name="name" value="<?=set_value('name')?>">
		<?php 

			if(isset($validation) && $validation->hasError('name')){
				echo $validation->getError('name');
			} 
		?>
		<br>
		Auther <input type="text" name="auther" value="<?=set_value('auther')?>">
		<?php 

			if(isset($validation) && $validation->hasError('auther')){
				echo $validation->getError('auther');
			} 
		?>
		<br>
		ISBN <input type="text" name="isbn"><br>
		<input type="submit" name="submit">
	</form>
</body>
</html>