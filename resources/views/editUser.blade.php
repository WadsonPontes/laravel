<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Edição de Usuário</title>
</head>
<body>
	<form action="{{ route('user.update', ['user' => $user->id]) }}" method="post">
		@csrf
		@method('PUT')
		<label for="">Nome do usuário:</label>
		<input type="text" name="name" value="{{ $user->name }}">

		<label for="">Email do usuário:</label>
		<input type="email" name="email" value="{{ $user->email }}">

		<label for="">Senha do usuário:</label>
		<input type="password" name="password">

		<input type="submit" value="Editar usuário">
	</form>
</body>
</html>