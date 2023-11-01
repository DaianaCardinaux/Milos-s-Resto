<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milo's</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="../images/Logo/favicon.png" />
    <link rel="stylesheet" type="text/css" href="../styles/style.css">
</head>
</head>
<body>
    <header class="MenuColor">
        <div class="container-fluid nav-container ReservaBC">
            <nav class="navbar"> 
                    <ul class="nav">
                        <li class="nav-items">
                            <a class="nav-link menulink linkI" href="menu.html">Menuㅤ</a>
                        </li>
                        <li class="nav-items">
                            <a class="nav-link menulink linkI" href="contacto.html">Contacto</a>
                        </li>
                    </ul>

                <div class="navbar-logo ">
                    <a href="../index.html">
                        <img src="../images/Logo/Logotipo 500x500 px.png" type="button" class="logo">
                    </a>
                </div>
        
                    <ul class="nav">
                        <li class="nav-items">
                        <a class="nav-link menulink linkD" href="nosotros.html">Nosotros</a>
                        </li>
                        <li class="nav-items">
                            <a class="nav-link menulink linkD menumarcado" href="reserva.html">Reserva</a>
                        </li>
                    </ul>
            </nav>
        </div>

    </header>

    <main>
        
<?php

$link = mysqli_connect("localhost", "root", "", "milosresto") or die("<h2> No se encuentra el servidor</h2>");


$Nombre = $_POST['Mesas'];
$Comensales = $_POST['Comensal'];
$FechayHora = $_POST['FechayHora'];

$req = (strlen($Nombre) * strlen($Comensales) * strlen($FechayHora)) or die("<h2> No se han llenado todos los campos</h2>");


mysqli_query($link, "INSERT INTO reservas VALUES ('', '$Nombre', '$Comensales', '$FechayHora')") or die("<h2> Error de envio </h2>");
?>

<h2 class="Reservacion text-center">¡Reservación hecha con exito!</h2>
     
    </main>

    <footer>
        <div class="FooterMenu">
            <div class="Redes">
                <p class="RedesSociales"><strong>Siguenos en nuestras redes</strong></p><br>
                    <img class="IconoRedes" src="../images/Redes/facebook.png">
                    <img class="IconoRedes" src="../images/Redes/tiktok.png">
                    <img class="IconoRedes" src="../images/Redes/instagram.png">   
            </div>
            <div class="Redes Mesero">
                <p class="RedesSociales">Llamar al mesero</p>
                <button id="BotonMesero">Llamar</button>
            </div>
        </div>
        <div class="Creditos">
            <p>Derechos Reservados &copy 2023 Daiana</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="../js/mesero.js"></script>
</body>
</html>