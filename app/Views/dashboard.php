<DOCTYPE html>

<html>
    <head>
    <title>Cidadao</title>
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
    <?php
	    $json = file_get_contents("http://transparencia.al.gov.br/despesa/json-despesa-favorecido/?data_registro_dti_=01/01/2020&data_registro_dtf_=31/12/2020&limit=15&offset=0&sort=total_pago&order=asc");
	    $obj = json_decode($json);
	    $ob = get_object_vars($obj);
	    var_dump($ob['rows']);
	    echo "<br>";
	    $detalhe=get_object_vars($ob['detalhe']);
	    echo $detalhe['valor_liquidado__sum'];
    ?>
    </body>
</html>