<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/header.css">
</head>
<body>
  <header class="header">
  <div class="menu_button" id= "menu_button">
  <button type="button" class="button__menu" onclick="changeButtonMenu()">
    <span></span>
    <span></span>
    <span></span>
  </button>
</div>
  
  <div class="logo_icon">
  <img class="logo" src="/assets/logo.png" alt="">
</div>

  <div class="search_and_icon">
  <div id="search_bar" class="search_bar">
    <input type="text" id="txtBusca"/>
    <img src="/assets/icon_search.png" id="search_button" alt="Buscar"/>
  </div>

  <button id="icon" type="button" class="icon">
  <img src="/assets/icon _user.png" alt="">
</button>

<button type="button" class="button__features" id="button__features">
  <img src="/assets/icon _shopping cart.png" alt="">
</button>
</div>

  </header>
  <script src="/js/main.js"></script>
  <script src="/js/modal.js"></script>
  <script src="/js/nav.js"></script>
  @include('modal_final');
  @include('navegacao');



</body>
</html>