<DOCTYPE html>

<html>
    <head>
    <title>Incidente</title>
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
    <script>
        // Used to toggle the menu on small screens when clicking on the menu button
        function myFunction() {
          var x = document.getElementById("navDemo");
          if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
          } else { 
            x.className = x.className.replace(" w3-show", "");
          }
        }
    </script>
    <!-- Navbar -->
    <div class="w3-top">
        <div class="w3-bar w3-dark-grey w3-card w3-left-align w3-large">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a href="/home" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Home</a>
            <a href="/cidadao" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Cidadão</a>
            <a href="/incidente" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Incidente</a>
            <a href="/dashboard" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Dashboard</a>
        </div>
        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
            <a href="/home" class="w3-bar-item w3-button w3-padding-large">Home</a>
            <a href="/cidadao" class="w3-bar-item w3-button w3-padding-large">Cidadao</a>
            <a href="/incidente" class="w3-bar-item w3-button w3-padding-large">Incidente</a>
            <a href="/dashboard" class="w3-bar-item w3-button w3-padding-large">Dashboard</a>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <form class="w3-container w3-card-4" action="http://localhost:8080/incidente/cadastrarIncidente" method="POST">
      <h2 class="w3-text-blue">Formulário de cadastro</h2>
      <p>      
          <label class="w3-text-blue"><b>Tipo: </b></label>
          <input class="w3-input w3-border" name="tipo" type="text">
      </p>
      <p>      
          <label class="w3-text-blue"><b>Nome:</b></label>
          <input class="w3-input w3-border" name="nome" type="text">
      </p>
      <p>      
          <label class="w3-text-blue"><b>Localização: </b></label>
          <input class="w3-input w3-border" name="localizacao" type="text">
      </p>
      <p>      
          <label class="w3-text-blue"><b>Data de cadastro: </b></label>
          <input class="w3-input w3-border" name="data_cadastro" type="text">
      </p>
      <p>      
          <label class="w3-text-blue"><b>Foto: </b></label>
          <input class="w3-input w3-border" name="path_foto" type="file">
      </p>
      <p>      
          <label class="w3-text-blue"><b>Marcar condição:</b></label>
          <input class="w3-input w3-border" name="condicao_incidente" type="text">
      </p>
      <br>
      <p>
        <button class="w3-btn" onclick="">Visualizar incidentes por tipo</button>
        <button class="w3-btn w3-blue w3-right" type="submit">Cadastrar</button>
      </p>
    </form>
    </body>
</html>