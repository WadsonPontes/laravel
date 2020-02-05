<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Detalhes do Usuário</title>
</head>
<body>
	<h1>{{ $user->name }}</h1>
	<p>{{ $user->email }}</p>
	<p>{{ date('d/m/Y H:i', strtotime($user->created_at)) }}</p>
	<a href="{{ route('user.edit', ['user' => $user->id]) }}">Editar Usuário</a>
	<a href="{{ route('user.index') }}">Listas Usuários</a>
</body>
</html>