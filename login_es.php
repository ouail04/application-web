<?php session_start(); ?>
<?php
include("home_es.html"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión - NEURO AUDITION</title>
    <style>
        form[action="passwd.php"]{  width: 100%; height: 400px; display: flex; justify-content: center; align-items: center;font-size: 20px ;}
        table.login input { font-size: 40px ; margin-left: 30px; }
         td.button{ text-align: center ; }
         input#annuler,input#envoyer { font-size:30px;}
         td.erreur{ color :red ; font-size: 20px; text-align:center; display:none;}
         div.div12 { background-color:rgb(230, 254, 216); text-align:center; margin-top: -1cm;}
         div.div12 h1 { font-size: 50px;}
         div.div12 p { font-family : serif; font-size : 30px;}
         div.div77 { text-align: left;  position: fixed; top: 0; left: 0; }
    </style>
</head>
<body>
<div  style='text-align:left;' class='div77'>
<a href='login.php'>FR</a> | <a href='login_ar.php' >AR</a> | <a href="login_es.php">ES</a>
</div>
<div class="div12">
<header>
        <h1>Bienvenido al sitio de administración</h1>
        <p>Este enlace es exclusivo para la administración.</p>
        <!-- ... Otros elementos del encabezado ... -->
    </header>
    <form action="passwd.php" method="post" class="login">  
    
    <table class="login">
        <tr><th>USUARIO</th><td><input type="text" name="login"></td></tr>
        <tr><th>CONTRASEÑA</th><td><input type="password" name="passwd"></td></tr>
        <tr><td ></td><td class='erreur' id="ere">Usuario o contraseña incorrectos</td></tr>
        <tr><td colspan="2" class="button" ><input type="reset" value="Cancelar" id='annuler'><input type="submit" value="Enviar" id='envoyer'></td></tr>
    </table>
        <?php
        
        if(isset($_SESSION['faux']))
        {
            echo "<script> document.getElementById('ere').style.display='block'; </script> ";
        }
        $_SESSION = array();
        session_destroy();
        ?>
        
    
    </form>
</div>
    
    
</body>
</html>
<?php include('pie_de_page_es.html') ?>
