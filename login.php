<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css"  href="estilo.css" />
	</head>
	<body>

<nav id="menu">
	<ul>
		<li><a href="formInsert.html">formInsert</a></li>
		<li><a href="menu.php">menu</a></li>
		<li><a href="login.php">login</a></li>
		<li><a href="pagina.php">pagina</a></li>
	</ul>
</nav><br><br>

		<form method="post" action="autentica.php" id="formlogin" name="formlogin" >
			<label>USUÁRIO:</label>
			<input type="text" name="login" id="login"/><br/>
			<label>SENHA:</label>
			<input type="password" name="senha" id="senha"/><br/>
			<input type="submit" value="LOGAR"/>
		</form>
	</body>
</html>

