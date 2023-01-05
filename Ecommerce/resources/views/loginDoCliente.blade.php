<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login do Cliente</title>
</head>
<body>
    <header>

    </header>

    <main>
    <div class="right-tabela">
            <div class="input">
                <div class="personalizacao-tabelas">
                    <form class="textfield" action="/cliente/login" method="post">
                        @csrf

                        <label for="nomeDoCliente">Nome</label>
                        <input type="text" name="nomeDoCliente" id="nomeDoCliente" placeholder="Seu Nome">

                        <label for="emailDoCliente">Email</label>
                        <input type="email" name="emailDoCliente" id="emailDoCliente" placeholder="Email">


                        <div>
                            <input type="submit" class="btn-login" value="cadastrarCliente">
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