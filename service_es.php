<?php
include('home_es.html');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios - NEURO AUDITION</title>
    <style>
        .signia_logo { width:90px; }
        h3 {  border: 2px; }        
        .container { display: flex; align-items: center; }
        .image-wrapper { text-align: left; margin-right: 20px;  }
        .image-wrapper img { width: 400px; height: auto; transition: transform 0.3s ease-in-out; border : #509163;  }
        .image-wrapper:hover img { transform: scale(1.2); }
        .info-list { font-size: 20px; transition: font-size 0.3s ease-in-out; }
        .image-wrapper:hover + .info-list li { font-size: 25px;}
        h1 { text-align : center ;font-size: 80px; }
        h3 { text-align : center ; border : solid 2px ; }
        li img { width: 50px; }
        UL :first-child { list-style-type: none; }
        video { width:100%;}
        .image-container {
        display: inline-block;
    }
        @media only screen and (max-width: 480px) 
        {
    .container { flex-direction: column; align-items: center; }
    .image-wrapper { margin-right: 0; }
    .info-list { margin-top: 20px; }
    h1 {        font-size: 70px; }
        }
        div.div77 { text-align: left;  position: fixed; top: 0; left: 0;  }
    </style>
</head>
<body>  
<div  style='text-align:left;' class='div77'>
<a href='service.php'>FR</a> | <a href='service_ar.php' >AR</a> | <a href="service_es.php">ES</a>
</div>
    <div class="video">
        <video src="videop3.mp4"  autoplay controls muted></video>
    </div>  
    <h1><img src="signia_logo.png" class="signia_logo"></h1>

    <div class="container">
    <div class="image-wrapper">
        <h3>INTUIS M 4</h3>
        <div style='display: flex;  position: relative;'>
            <img src="pic4.png" alt="Tu Imagen">
            <img src="pic7.png" class="icon" style="width: 150px; height: 100px; position: absolute; bottom: 20px; right: -40px;">
        </div>
    </div>
    <ul class="info-list">
        <li><img src="baterie_icon.png" class='icon'> <img src="face_icon.png"> <img src="bleuth_icon.png"> <img src="tele_icon.png"></li>
        <li>Bluetooth® Low Energy*, que permite la transmisión directa de llamadas y música desde dispositivos iOS y Android.</li>
        <li>2 unidades de procesamiento integradas para producir un sonido claro y nítido.</li>
        <li>Nuevo diseño más pequeño y delgado.</li>
        <li>3 opciones de carga (cargador portátil, estándar y Dry&Clean) para Pure C&G AX y un compartimiento de pila para Pure 312 AX.</li>
        <li style='font-weight:bold;font-size:30px;'>Oferta de batería gratuita durante un año</li>
    </ul>
</div>

    

    <div class="container">
    <div class="image-wrapper">
        <h3>Pure 312 Recargable</h3>
        <img src="pic9.png" alt="Tu Imagen">
    </div>
    <ul class="info-list">
        <li><img src="baterie_icon.png" class='icon'> <img src="face_icon.png"> <img src="bleuth_icon.png"> <img src="tele_icon.png"></li>
        <li>Recargable con hasta 28 horas de autonomía para Pure C&G AX y con pila hasta 89 horas para Pure 312 AX</li>
        <li>Bluetooth® Low Energy*, que permite la transmisión directa de llamadas y música desde dispositivos iOS y Android</li>
        <li>2 unidades de procesamiento integradas para producir un sonido claro y distintivo.</li>
        <li>Nuevo diseño más pequeño y delgado.</li>
        <li>3 opciones de carga (cargador portátil, estándar y Dry&Clean) para Pure C&G AX y un compartimiento de pila para Pure 312 AX</li>
    </ul>
</div>


<div class="container">
    <div class="image-wrapper">
        <h3>PURE 321 CON PILA</h3>
        <div style='display: flex;  position: relative;'>
            <img src="pic6.png" alt="Tu Imagen">
            <img src="pic7.png" class="icon" style="width: 150px; height: 100px; position: absolute; bottom: 20px; right: -40px;">
        </div>
    </div>
    <ul class="info-list">
        <li><img src="baterie_icon.png" class='icon'> <img src="face_icon.png"> <img src="bleuth_icon.png"> <img src="tele_icon.png"></li>
        <li>Estilo: Detrás de la Oreja (BTE)</li>
        <li>Tamaño de la Batería: 13</li>
        <li>Batería Recargable: No</li>
        <li>Garantía del Fabricante: Garantía de 4 años</li>
        <li>Pérdida/Daño: Garantía del fabricante de 12 meses</li>
        <li>Bluetooth / Inalámbrico: Sí</li>
        <li>Transmisión de Sonido Directo: iPhone, Android(a)</li>
        <li>Aplicación para Smartphone: iPhone, Android Garantía del 5% de Mejor Precio</li>
        <li style='font-weight:bold;font-size:30px;'>Oferta de batería gratuita durante un año</li>
    </ul>
</div>


<?php include('pie_de_page_es.html') ?>
</body>
</html>
