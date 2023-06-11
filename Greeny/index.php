<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/3155ac22a3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style_index.css" class="stylesheet">
    <link rel="shortcut icon" href="img/lettuce.ico" type="image/x-icon">
    <title>Greeny</title>
</head>

<body>

    <?php include 'logo_component.php'; ?>
    <?php include 'header_component.php'; ?>
    <!--------------- Inicio--------------------->
    <section class="home" id="home">
        <div class="home-img">
            <img src="img/principal2.png" alt="">
        </div>
        <div class="home-two"> <!-- ELIMINAR DIV-->
            <div class="home-text">
                <h1>Del campo a tu mesa</h1>
                <p>Productos frescos y deliciosos directamente de los agricultores colombianos. ¡Únete a nosotros para
                    disfrutar de los mejores productos y contribuir a la conservación del medio ambiente!</p>
                <div class="button">
                    <a href="#" class="btn">Ordenar</a>
                </div>
            </div>
            <div class="images">
                <div class="container-f">
                    <div class="box-i color-banana fruit" class>
                        <div class="box-img-i">
                            <img src="img/banana.png" alt="">
                        </div>
                        <h2>Banano</h2>
                        <h3>Frutas</h3>
                        <span>$500 c/u</span>
                        <a href="#"><i class="fa-solid fa-cart-shopping fa-lg"></i></a>
                        <!-- Icono -->
                    </div>
                    <div class="box-i color-apple fruit">
                        <div class="box-img-i">
                            <img src="img/apple.png" alt="">
                        </div>
                        <h2>Manzana</h2>
                        <h3>Frutas</h3>
                        <span>$1450 c/u</span>
                        <a href="#"><i class="fa-solid fa-cart-shopping fa-lg"></i></a>
                        <!-- Icono -->
                    </div>
                    <div class="box-i color-orange fruit">
                        <div class="box-img-i">
                            <img src="img/orange.png" alt="">
                        </div>
                        <h2>Naranja</h2>
                        <h3>Frutas</h3>
                        <span>$1000 c/u</span>
                        <a href="#"><i class="fa-solid fa-cart-shopping fa-lg"></i></a>
                        <!-- Icono -->
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!--------------- About start --------------------->
    <section class="about" id="about">

        <div class="about-text">
            <span>Sobre nosotros</span>
            <h2>Somos una plataforma que une el campo con la ciudad </h2>
            <p>Nuestra plataforma es una apuesta por conectar el campo con la ciudad, permitiendo el consumo de
                alimentos en naturales cultivados por los campesinos de la región y que a su vez permite la preservación
                de medio ambiente.</p>
            <a href="conocenos.php" class="btn">Conócenos</a>
        </div>
        <div class="about-img">
            <img src="img/about.png" alt="">
        </div>
    </section>
    <!--------------- Menu --------------------->
    <section class="menu" id="menu">
        <div class="heading">
            <span>Productos</span>
            <h2> Descubre las opciones que tenemos para ti</h2>
        </div>
        <div class="menu-container">
            <div class="box">
                <div class="box-img">
                    <img src="img/fruits.png" alt="">
                </div>
                <h2>Frutas</h2>
                <a href="#"><i class="fa-solid fa-circle-plus"></i></a>
                <!-- Icono -->
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/vege.png" alt="">
                </div>
                <h2>Verduras</h2>
                <a href="#"><i class="fa-solid fa-circle-plus"></i></a>
                <!-- <span>$500</span> -->
                <!-- Icono -->
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/coffe.png" alt="">
                </div>
                <h2>Café</h2>
                <a href="#"><i class="fa-solid fa-circle-plus"></i></a>
                <!-- Icono -->
            </div>
        </div>
    </section>
    <!------ Servicios ----------->
    <section class="services" id="services">
        <div class="heading">
            <span>Servicios</span>
            <h2>Te ofrecemos alimentos de calidad, cultivados con el amor de nuestros campesinos</h2>
        </div>
        <div class="service-container">
            <div class="s-box">
                <div class="box-img">
                    <img src="img/bag.png" alt="">
                </div>
                <h3>Productos frescos de la finca a tu puerta</h3>
            </div>
            <div class="s-box">
                <div class="box-img">
                    <img src="img/run.png" alt="">
                </div>
                <h3>Entrega rápida y confiable</h3>
            </div>
            <div class="s-box">
                <div class="box-img">
                    <img src="img/delivery.png" alt="">
                </div>
                <h3>Servicio personalizado y amigable</h3>
            </div>
        </div>
    </section>

    <!------ Caja de contacto ----------->
    <section class="contact" id="contact">
        <h2>Suscribete para obtener acceso exclusivo a nuestras ofertas y descubrir la magia del campo.</h2>
        <a href="#" class="btn">Suscribirme</a>
    </section>

    <script src="script/script.js"></script>
</body>

</html>