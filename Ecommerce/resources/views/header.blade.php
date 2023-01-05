<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
</head>
<body>
  <header>
  <div class="menu_button">
  <button type="button" class="button__menu" onclick="changeButtonMenu()">
    <span></span>
    <span></span>
    <span></span>
  </button>
</div>
  
  <div class="logo_icon">
  <img class="logo" src="Assets\logo.png" alt="">
</div>

  <div class="search_and_icon">
  <div id="search_bar" class="search_bar">
    <input type="text" id="txtBusca"/>
    <img src="Assets/icon_search.png" id="search_button" alt="Buscar"/>
  </div>

  <button type="button" class="button__features">
  <img src="Assets\icon _user.png" alt="">
</button>

<button type="button" class="button__features">
  <img src="Assets\icon _shopping cart.png" alt="">
</button>
</div>

  </header>
  <script src="/public/js/main.js"></script>




<div id="modal_login" class="modal_container">
  <div class="modal">
    <h1>
      Faça Log-in
    </h1>
    <form class="modal_form" action="">
      <input type="text" class="input" placeholder="E-mail">
      <br>
      <input type="password" class="input" placeholder="Senha">
      <br>
      <div class="div_checkbox">
        <label for="" class="container">
          <input type="checkbox" checked="checked">
<span class="checkmark">Mantenha-me conectado - válido para todos os métodos de log-in.

        </span>
        </label>
      
      
    </div>
      <br>
      <input type="button" class="button_cont" value="Continuar">
      <br>
      <h4>Não tem uma conta?</h4>
      <input type="button" class="button_cad" value="Cadastre-se">
    </form>
  </div>
  </div>
</body>
</html>