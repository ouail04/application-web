<?php
include('home_ar.html');
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEURO AUDITION</title>
    <style>
        .paragraph4 {
    width: 100%;
    height: 16cm;
    background-image: url(pic8.jpg);
    background-size: cover;
    margin-top: 0.5cm;
          }
       #Bienvenue {
    font-size: 100px;
    color: #fff;
    font-style: inherit;
    position: relative;
    top: 70px;
    margin-left: 0.5cm;
}
.paragraph5
{
    font-size: 40px;
    margin-top: -0.5cm;
    color: #474b48;
    
}

.paragraph6
{
    margin-top: -1cm;
    font-size: 40px;
    color: #474b48;

}
.picture8 {
    width: 90px;
    position: absolute;
    top: 190px;
    right: 40px;
}
.picture9
{
    width: 90px;
    position: absolute;
    bottom: -160px;
    right: 40px;
}
div.app_list
{
    margin-top: 1cm;
    display: flex;
    justify-content: center;
    width: 100%;

}
div.img_app img
{
    border : solid  black ;
    border-radius: 5px;
    width: 50%;  
    
}
div.img_app img:hover {    transform: scale(1.2); }

h3 {    border: solid black;    color : black ;    width: 50%;    margin-left: 25%;   border-radius: 5px; }

fieldset {   margin-top: 1cm; }

table { width: 100%;}

img[src^='appa']{ width: 100%;}

th { font-size : 90px; text-align: center ;}

.paragra11 {
    font-size: 20px;
    font-weight: bold;
    text-align: center;
    background-color: #f8f8f8;
    padding: 10px;
    border: 2px solid #509163;
    border-radius: 5px;
    margin: 20px;
    transition: background-color 0.3s ease-in-out;
}

.paragra11 a {
    color: #509163;
    text-decoration: none;
}

.paragra11 a:hover {
    color: #ffffff;
    background-color: #509163;
    padding: 8px;
    border-radius: 5px;
}
body { text-align:right;direction: rtl;}

/* Styles pour les téléphones portables */
@media only screen and (max-width: 480px) {
            

            .cellule2_tab1 {
                text-align: right;
            }
    
            .cellule2_tab1 span {
                display: inline-block;
                margin-right: 5px;
                margin-top: -70px;
            }
    
            .cellule1_tab1 {
                text-align: right;
                width : 50%;
            }
    
            .tab1 {
                width: 100%;
            }
    
            nav {
                background-color: #509163;
                padding: 10px;
            }
    
            nav ul {
                list-style: none;
                margin: 0;
                padding: 0;
            }
    
            nav ul li {
                display: inline-block;
            }
    
            nav ul li a {
                color: #fff;
                text-decoration: none;
                padding: 10px 20px;
            }
            }
            div.div77 { text-align: left;  position: fixed; top: 0; left: 0;  }
</style>
</head>
<body >
<div  style='text-align:left;' class='div77'>
<a href='index.php'>FR</a> | <a href='index_ar.php' >AR</a> | <a href="index_es.php">ES</a>
</div>
    <div class="paragraph4" style='text-align:left;'>
        <div id="Bienvenue">
            <span>كن  <br> رائعًا</span>  <p class="paragraph5">مع خبير السمع الخاص بك</p><p class="paragraph6">أفضل معالج للسمع</p>
        </div>
        <a href="https://www.signia.net/fr-fr/"><img src="signia_logo.png" class="picture8"></a>
        <img src="semens.png" class="picture9">
    </div>
    <table>
        <tr>
            <th colspan='4'>Intuis™ 3 family</th>
        </tr>
        <tr>
            <td><a href="service.php"><img src="appareil1.jpg"></a></td>
            <td><a href="service.php"><img src="appareil2.jpg"></a></td>
            <td><a href="service.php"><img src="appareil3.jpg"></a></td>
            <td><a href="service.php"><img src="appareil4.jpg"></a></td>
        </tr>
    </table>
    <p class='paragra11'><a href="service.php">ابتداءً من 4000 درهم</a></p>

    <?php include('pie_de_page_ar.html') ?>
</body>
</html>
