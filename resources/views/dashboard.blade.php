<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Dashboard</title>
</head>
<body>
	<h1>Logado com sucesso!</h1>
	<p>Olá {{ $user->name }}</p>
	<a href="{{ route('logout') }}">Logout</a>
</body>
</html>