<!DOCTYPE html>
<html>
<head>
	<title>edit book</title>
</head>
<body>
	<h2>edit book</h2>
	<?php 
	//print_r($book); 
	//Array ( [id] => 8 [name] => mohd akram [auther] => aaaa22 [isbn] => 22222 [added_date] => 2021-02-03 14:08:39 ) 
	?>
	<form  method="post">
		
		Name <input type="text" name="name" value="<?=set_value('name', $book['name'])?>">
		<?php 
			if(isset($validation) && $validation->hasError('name')){
				echo $validation->getError('name');
			} 
		?>
		<br>
		Auther <input type="text" name="auther" value="<?=set_value('auther', $book['auther'])?>">
		<?php 
			if(isset($validation) && $validation->hasError('auther')){
				echo $validation->getError('auther');
			} 
		?>
		<br>
		ISBN <input type="text" name="isbn" value="<?=set_value('isbn', $book['isbn'])?>"><br>
		<input type="submit" name="submit">
	</form>
</body>
</html>