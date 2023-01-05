<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <script scr="/js/scripts.js"></script>
    <title>Cadastro do Usuário</title>
</head>
<body>
    <header>

    </header>
    <main>  
        <div class="right-tabela">
            <div class="input">
                <div class="personalizacao-tabelas">
                    <form class="textfield" action="/cliente/cadastrar" method="POST">
                        @csrf

                        <label for="nomeDoCliente">Nome</label>
                        <input type="text" name="nomeDoCliente" id="nomeDoCliente" placeholder="Seu Nome">

                        <label for="emailDoCliente">Email</label>
                        <input type="email" name="emailDoCliente" id="emailDoCliente" placeholder="Email">

                        <label for="cpfDoCliente">CPF</label>
                        <input type="text" name="cpfDoCliente" id="cpfDoCliente" placeholder="CPF">

                        <label for="telefoneDoCliente">Telefone</label>
                        <input type="text" name="telefoneDoCliente" id="telefoneDoCliente" placeholder="Telefone">

                        <label for="dataDeNascimento">Data de Nascimento</label>
                        <input type="date" name="dataDeNascimento" id="dataDeNascimento">

                        <label for="senhaDoCliente">Senha</label>
                        <input type="password" name="senhaDoCliente" id="senhaDoCliente">

                        <div>
                            <input type="submit" class="btn-login" value="cadastrarCliente">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer></footer>
</body>
</html>