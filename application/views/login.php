	<!DOCTYPE html>
	 
	<html lang="en">
	 
	<head>
	 <title>Login</title>
	 
	 <meta charset = "utf-8">
  </head>
	 
	<body>
	 
	<h1>Login de Usuarios</h1>
	<hr />
	 
	<form action="<?=site_url('Login/login')?>" method="post" >
	 <?php if (isset($data)): ?>
	 	<?=$data  ?>
	 <?php endif ?>
	<label>Nombre Usuario:</label><br>
	<input name="user" type="text" id="user" required>
	<br><br>
 
	<label>Password:</label><br>
	<input name="password" type="password" id="password" required>
	<br><br>
	 
	<input type="submit" name="Submit" value="LOGIN">
	 
	</form>
	<hr />
	 
	<footer>
	</footer>
	 
	 </body>
	</html>
