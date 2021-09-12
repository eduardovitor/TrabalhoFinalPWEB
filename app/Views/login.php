<!DOCTYPE html>

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
    .w3-bar,h1,button {font-family: "Montserrat", sans-serif}
    .fa-anchor,.fa-coffee {font-size:200px}
    </style>
</head>

<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-dark-grey w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="/home" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Home</a>
    <a href="/cidadao" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Cidadão</a>
    <a href="/incidente" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Incidente</a>
    <a href="/dashboard" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Dashboard</a>
  </div>
  <br>
  <br>
  <br>
  <form class="w3-container w3-card-4" action="http://localhost:8080/login/validar" method="POST">
      <h2 class="w3-text-blue">Login</h2>
      <p>      
          <label class="w3-text-blue"><b>Email: </b></label>
          <input class="w3-input w3-border" name="email" type="email">
      </p>
      <p>      
          <label class="w3-text-blue"><b>Senha: </b></label>
          <input class="w3-input w3-border" name="senha" type="password">
      </p>
      <br>
      <p>      
          <button class="w3-btn w3-blue" type="submit"> Confirmar </button>
      </p>
  </form>
</body>