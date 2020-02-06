<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Login</title>
</head>
<body>
	<form action="{{ route('login.do') }}" method="post">
		@csrf

		<label for="">Name:</label>
		<input type="text" name="name">

		<label for="">Senha:</label>
		<input type="password" name="password">

		<input type="submit" value="Login">
	</form>
</body>
</html>