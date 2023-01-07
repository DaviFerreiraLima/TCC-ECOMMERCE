<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <title>Login do Cliente</title>
</head>
<body>
    <header>

    </header>

    <main>
    <div class="right-tabela">
            <div class="input">
                <div class="personalizacao-tabelas">
                    <form class="textfield" action="/cliente/logar" method="post">
                        @csrf

                        <input value="{{ old('emailDoCliente') }}" type="email" name="emailDoCliente" id="emailDoCliente" class="input" placeholder="E-mail">
                            {{ $errors->has('emailDoCliente') ? $errors->first('emailDoCliente') : '' }}
                            <br>
                        <input value="{{ old('senhaDoCliente') }}" class="input" type="password" name="senhaDoCliente" id="senhaDoCliente" placeholder="Senha">
                        {{ $errors->has('senhaDoCliente') ? $errors->first('senhaDoCliente') : '' }}
                            <br>
                            
                        <div>
                            <input type="submit" class="btn-login" value="Continuar">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </main>

    <footer>

    </footer>
</body>
</html>