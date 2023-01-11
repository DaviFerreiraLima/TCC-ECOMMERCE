<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/login.css">
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


                        <div id="modal_login" class="modal_container mostrar">
  <div class="modal">
  <button class="fechar">x</button>
    <h1>
      Faça Log-in
    </h1>
    <form class="modal_form" action="">
    <input value="{{ old('emailDoCliente') }}" type="email" name="emailDoCliente" id="emailDoCliente" class="input" placeholder="E-mail">
                            {{ $errors->has('emailDoCliente') ? $errors->first('emailDoCliente') : '' }}
      <br>
      <input value="{{ old('senhaDoCliente') }}" class="input" type="password" name="senhaDoCliente" id="senhaDoCliente" placeholder="Senha">
                        {{ $errors->has('senhaDoCliente') ? $errors->first('senhaDoCliente') : '' }}
      <br>
      <div class="div_checkbox">
        <label for="" class="container">
          <input type="checkbox" checked="checked">
<span class="checkmark">Mantenha-me conectado - válido para todos os métodos de log-in.

        </span>
        </label>
      
      
    </div>
      <br>
      <input type="submit" class="button_cont" value="Continuar">
      <br>
      <h4>Não tem uma conta?</h4>
      <input type="button" class="button_cad" value="Cadastre-se">
    </form>
  </div>
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