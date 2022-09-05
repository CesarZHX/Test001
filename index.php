<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ZHX Web Page</title>
    <link rel="shortcut icon" href="img/alexcgdesign.png" type="image/x-icon">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
</head>
<body>
    <header class="dos">
        <nav>
            <a href="#">Inicio</a>
            <a href="#">Acerca de</a>
            <a href="#">Portafolio</a>
            <a href="#">Servicios</a>
            <a href="#">Contacto</a>
        </nav>
    </header>
    <main>
        <form action="https://test01zhx.000webhostapp.com/PHP5.php" method="post" class="container">
            <div class="contact-box">
                <div class="left"></div>
                <div class="right">
                    <h2>Contactanos</h2>
                    <h4>¿Interesado en unirte a nuestra familia? Dejanos tu informacion. </h4><br>
                    <input type="text" class="field" name="Nom" placeholder="Nombres: " required="">
                    <input type="text" class="field" name="Ape" placeholder="Apellidos: " required="">
                    <input type="number" class="field" name="Tel" placeholder="Telefono: " required="">
                    <input type="email" class="field" name="Ema" placeholder="Email: " required=""></input>
                    <button type="submit" class="btn" name="Enviar">Enviar</button>
                </div>
            </div>
        </form>
        <?php
        include("PHP5.php")
        ?>
    </main>
    <footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>Telefono: </h4>
                <p>902737912</p>
            </div>
            <div class="content-foo">
                <h4>Email: </h4>
                <p>cesaralbornozhx@gmail.com</p>
            </div>
            <div class="content-foo">
                <h4>Ubicacion: </h4>
                <p>Peru - Lima</p>
            </div>
        </div>
        <h2 class="titulo-final">&copy; ZHX Design | Cesar Alejandro Albornoz Nava</h2>
    </footer>
</body>
</html>