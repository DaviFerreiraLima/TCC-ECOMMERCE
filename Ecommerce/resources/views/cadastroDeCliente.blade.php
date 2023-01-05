<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/cadastro.css">
    <script scr="/js/scripts.js"></script>
    <title>Cadastro do Usuário</title>
</head>

<body>
    <header>

    </header>
    <main>
    <div class="seta"></div>
    <h1 class="voltar">Voltar</h1>
        <div class="right-tabela">
            <div >
                <div class="personalizacao-tabelas">
                    <form class="textfield" action="/cliente/cadastrar" method="POST">
                        @csrf

                        <h1>Cadastre-se</h1>

                       

                        <div class="barra_progresso">
                            <span></span>
                            <span></span>
                            <span></span>

                        </div>

                        <br>
                        <div class="barra_divisao">
<span></span>
<span></span>         
<span></span>               
                        </div>
                        
                        <br>

                        <div class="inputs">
                        <input class="input" type="text" name="nomeDoCliente" id="nomeDoCliente" placeholder="Seu Nome">

                        
                        <input class="input" type="email" name="emailDoCliente" id="emailDoCliente" placeholder="Email">
                        
                        
                        <input class="input" type="text" name="cpfDoCliente" id="cpfDoCliente" placeholder="CPF">
                        
                        
                        <input class="input" type="text" name="telefoneDoCliente" id="telefoneDoCliente" placeholder="Telefone">
                        
                        
                        <input class="input" type="date" name="dataDeNascimento" id="dataDeNascimento" placeholder="Data de Nascimento">
                        
                       
                        <input class="input" type="password" name="senhaDoCliente" id="senhaDoCliente" placeholder="Senha">
                        <br>
                        </div>


                        <div>
                            <input type="submit" class="botão" value="Continuar">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer></footer>
</body>

</html>