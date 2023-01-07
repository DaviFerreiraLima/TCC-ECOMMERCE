<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <title>Cadastro de Produtos</title>
</head>
<body>
    <header></header>
    <main>
        <form class="textfield" action="/produto/cadastrar" method="post">
                        @csrf

                        <input value="{{ old('emailDoCliente') }}" type="text" name="nomeDoProduto" id="nomeDoProduto class=" placeholder="Nome">
                            {{ $errors->has('nomeDoProduto') ? $errors->first('nomeDoProduto') : '' }}
                            <br>

                        <input value="{{ old('tipoDoProduto') }}" class="input" type="text" name="tipoDoProduto" id="tipoDoProduto" placeholder="Tipo do Produto">
                        {{ $errors->has('tipoDoProduto') ? $errors->first('tipoDoProduto') : '' }}
                            <br>

                        <input value="{{ old('categoriaDoProduto') }}" class="input" type="text" name="categoriaDoProduto" id="categoriaDoProduto" placeholder="categoria Do Produto">
                        {{ $errors->has('categoriaDoProduto') ? $errors->first('categoriaDoProduto') : '' }}
                            <br>

                        <input value="{{ old('corDoProduto') }}" class="input" type="text" name="corDoProduto" id="corDoProduto" placeholder="cor Do Produto">
                        {{ $errors->has('corDoProduto') ? $errors->first('corDoProduto') : '' }}
                            <br>



                        <input value="{{ old('precoDoProduto') }}" class="input" type="text" name="precoDoProduto" id="precoDoProduto" placeholder="precoDoProduto">
                        {{ $errors->has('precoDoProduto') ? $errors->first('precoDoProduto') : '' }}
                            <br>


                        <input value="{{ old('imagemDoProduto') }}" class="input" type="text" name="imagemDoProduto" id="imagemDoProduto" placeholder="imagem Do Produto">
                        {{ $errors->has('imagemDoProduto') ? $errors->first('imagemDoProduto') : '' }}
                            <br>

                        <input value="{{ old('quantidadeDeEstoque') }}" class="input" type="number" name="quantidadeDeEstoque" id="quantidadeDeEstoque" placeholder="quantidadeDeEstoque">
                        {{ $errors->has('quantidadeDeEstoque') ? $errors->first('quantidadeDeEstoque') : '' }}
                            <br>

                      

                        <input value="{{ old('timeDoProduto') }}" class="input" type="text" name="timeDoProduto" id="timeDoProduto" placeholder="timeDoProduto">
                        {{ $errors->has('timeDoProduto') ? $errors->first('timeDoProduto') : '' }}
                            <br>

                        <input value="{{ old('ligaDoProduto') }}" class="input" type="text" name="ligaDoProduto" id="ligaDoProduto" placeholder="liga Do Produto">
                        {{ $errors->has('ligaDoProduto') ? $errors->first('ligaDoProduto') : '' }}
                            <br>

                        <input value="{{ old('anoDoProduto') }}" class="input" type="text" name="anoDoProduto" id="anoDoProduto" placeholder="anoDoProduto">
                        {{ $errors->has('anoDoProduto') ? $errors->first('anoDoProduto') : '' }}
                            <br>

                        <input value="{{ old('marcaDoProduto') }}" class="input" type="text" name="anoDoProduto" id="marcaDoProduto'" placeholder="marcaDoProduto'">
                        {{ $errors->has('marcaDoProduto'') ? $errors->first('marcaDoProduto'') : '' }}
                            <br>

                            
                        <div>
                            <input type="submit" class="btn-login" value="Continuar">
                        </div>
        </form>
    </main>
    <footer></footer>

</body>
</html>