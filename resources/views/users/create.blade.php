<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
</head>

<body>
    <a href="{{ route('user.index') }}">Bem vindo</a> <br>
    <h3>Cadastre-se</h3>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color: red">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('user-store') }}" method="post">
        @csrf
        @method('POST')
        <label>Nome:</label>
        <input type="text" name="name" placeholder="Nome completo" value="{{ old('name') }}"> <br> <br>
        <label>E-mail:</label>
        <input type="email" name="email" placeholder="Seu melhor e-mail!" value="{{ old('email') }}"> <br> <br>
        <label> Digite uma senha</label>
        <input type="password" name="password" placeholder="Digite uma senha forte(minimo 6 caracteres)" value="{{ old('password') }}"> <br> <br>

        <button type="submit">Cadastrar</button>

    </form>

</body>

</html>
