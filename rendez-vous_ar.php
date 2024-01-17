<?php
include('home_ar.html');
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="pasde.jpg" type="image/x-icon">
    <link rel="shortcut icon" href="pasde.jpg" type="image/x-icon">
    <title>موعد -  NEURO AUDITION</title>
    <style>
        h1 { text-align : center ; font-size: 80px;}
        div.divN2  {  width : 100% ; height: 100%; background-color:rgb(230, 254, 216);  margin-top : -5%;}
        div table { width :100% ;}
        td { text-align: left; }
        input, textarea { margin-bottom: 5%;}
        form { display: flex; justify-content: center; align-items: center;}
        tr { margin-top : 5%;}
        td:last-child { padding-left : 10%;}
        td[colspan]{ text-align : center ;}
        input[value] { color: black ; font-weight:  solid; font-family: bold; font-size: 20px ; background-color: #4D7D5A; border-radius: 5px;}
        input[value="Envoyer"] { margin-left: 3%;}
        div.divN2  div {  border : solid black 3px ; width : 60%; margin-bottom: 10%; background-color : white; border-radius: 5px; }
        @media only screen and (max-width: 480px) {
           table {
                width: 100%;
            }

            div.divN2 {
                width: 100%;
            }

            td {
                display: block;
                width: 100%;
            }

            td:last-child {
                padding-left: 0;
            }

            input[type="text"],
            input[type="number"],
            textarea {
                width: 90%;
                margin: 2% auto;
            }
            p.titre{ position: relative; bottom: -0.9cm;}
            td.cham{ position: relative; top: -1.3cm;}
            input.cham{ position: relative; top: -1.5cm;}
            p.titreEX { position: relative; bottom: -4.1cm;}
            input.cham2 { position: relative; top: -0.5cm;}
            h1{ font-size:70px;}
        }
        body { text-align:right;direction: rtl;}
        div.div77 { text-align: left;  position: fixed; top: 0; left: 0;  }
    </style>
<script>
        function verifier() {
            var nom = document.getElementsByName('nom')[0].value;
            var prenom = document.getElementsByName('prenom')[0].value;
            var tele = document.getElementsByName('tele')[0].value;
            var age = document.getElementsByName('age')[0].value;
            var exp_reguliere_caracteres = /^[A-Za-z]+$/;
            var exp_reguliere_telephone = /^0[1-9]([-. ]?[0-9]{2}){4}$/; // Expression régulière pour un numéro de téléphone français (commençant par 0)

            if (!isNaN(nom) || nom.trim() === "") {
                alert("Le champ nom doit contenir uniquement des caractères et ne pas être vide.");
                return false;
            }

            if (!isNaN(prenom) || prenom.trim() === "") {
                alert("Le champ prénom doit contenir uniquement des caractères et ne pas être vide.");
                return false;
            }

            if (!tele.match(exp_reguliere_telephone) || tele.trim() === "") {
                alert("Veuillez entrer un numéro de téléphone français valide (Exemple: 06 00 00 00 00).");
                return false;
            }
           

            var checkboxes = document.querySelectorAll('input[type="checkbox"]');
            var aucunSelectionne = true;

            for (var i = 0; i < checkboxes.length; i++) {
                if (checkboxes[i].checked) {
                    aucunSelectionne = false;
                    break;
                }
            }

            if (aucunSelectionne) {
                alert("Veuillez sélectionner au moins une option dans la liste.");
                return false;
            }

            if (age < 1 || age.trim() === "" || age > 150)
            {
                alert("Veuillez entrer un âge valide (nombre entier positif jusqu'à 150 ans).");
                return false ; 
            }
            

            return true;
        }
        </script>
</head>
<body >
<div  style='text-align:left;' class='div77'>
<a href='rendez-vous.php'>FR</a> | <a href='rendez-vous_ar.php' >AR</a> | <a href="rendez-vous_es.php">ES</a>
</div>
   <div class='divN2' >
   <h1>احجز موعدك الآن</h1>
   <form action="formulaire.php" method="post" onsubmit="return verifier();">
        <div >
            <table >
                <tr> <td>الاسم الشخصي</td><td>الاسم العائلي</td> </tr>
                <tr><td><input type="text"  name="nom" placeholder="الاسم الشخصي"  required></td> <td><input type="text" name="prenom" placeholder="الاسم العائلي"  required></td></tr>
                <tr><td>رقم الهاتف</td> <td>العمر </td> </td></tr>
                <tr><td><input type="number" name="tele" placeholder="مثال:00 00 00 00 06"  required></td><td><input type="number" name="age" placeholder="عمرك" required></tr>
                <tr><td>السبب </td> <td>التوضيح</td></tr>
                 <tr> 
                 <td>
                             <input type="checkbox" name="box1" value="Évaluation de l'audition" >تقييم السمع <br>
                             <input type="checkbox" name="box2" value="Adaptation d'appareils auditifs" >تكييف أجهزة السمع <br>
                             <input type="checkbox" name="box3" value="Suivi et services après-vente" >متابعة وخدمات ما بعد البيع
                </td>
                <td><textarea name="explication"cols="30" rows="10" name="explication" defaultvalue="vide" placeholder="قدم مزيد من المعلومات حول سببك !!"></textarea></td>
                 </tr> 
                 <tr> <td colspan="2"> <input type="reset" value="إلغاء" ><input type="submit" value="إرسال"></td></tr>
            </table>

        </div>
    </form>
   </div>
</body>
</html>
<?php include('pie_de_page_ar.html') ?>
