<?php
include('home_ar.html');
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الخدمات -NEURO AUDITION</title> 
    <style>
        .signia_logo { width:90px; }
        h3 {  border: 2px; }        
        .container { display: flex; align-items: center; }
        .image-wrapper { text-align: right; margin-right: 20px;  }
        .image-wrapper img { width: 400px; height: auto; transition: transform 0.3s ease-in-out; border : #509163;  }
        .image-wrapper:hover img { transform: scale(1.2); }
        .info-list { font-size: 20px; transition: font-size 0.3s ease-in-out; text-align: right;direction: rtl; }
        .image-wrapper:hover + .info-list li { font-size: 25px;}
        h1 { text-align : center ;font-size: 80px; }
        h3 { text-align : center ; border : solid 2px ; }
        li img { width: 50px; }
        UL :first-child { list-style-type: none; }
        video { width:100%;}
        .image-container {
        display: inline-block;
    }
    body { text-align:right;direction: rtl;}
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
        <video src="videop3.mp4" autoplay controls muted></video>
    </div>  
    <h1><img src="signia_logo.png" class="signia_logo"></h1>
    

<div class="container">
        <div class="image-wrapper">
        <h3>INTUIS M 4</h3>
        <div style='display: flex;  position: relative;'>
    <img src="pic4.png" alt="صورتك">
    <img src="pic7.png" class="icon" style="width: 200px; height: 150px; position: absolute; bottom: 20px; right: -80px;">
</div>

        </div>
        <ul class="info-list">
            <li><img src="baterie_icon.png" class='icon'> <img src="face_icon.png"> <img src="bleuth_icon.png"> <img src="tele_icon.png"></li>
            <li>Bluetooth® Low energy*، مما يتيح بث المكالمات والموسيقى مباشرة على iOS و Android</li>
            <li>2 وحدة معالجة متكاملة تسمح بإنتاج صوت واضح ومميز.</li>
            <li>تصميم جديد أصغر وأنحف</li>
            <li>3 خيارات للشحن (شاحن محمول ، قياسي وDry&Clean) لـ Pure C&G AX وحجرة للبطارية لـ Pure 312 AX</li>
        </ul>
</div>
<div class="container">
        <div class="image-wrapper">
        <h3>Pure 312 قابلة للشحن</h3>
            <img src="pic9.png" alt="صورتك">
        </div>
        <ul class="info-list">
            <li><img src="baterie_icon.png" class='icon'> <img src="face_icon.png"> <img src="bleuth_icon.png"> <img src="tele_icon.png"><</li>
            <li>قابلة لإعادة الشحن لمدة تصل إلى 28 ساعة من الاستخدام لـ Pure C&G AX وتصل إلى 89 ساعة لـ Pure 312 AX بواسطة البطارية</li>
            <li>Bluetooth® Low energy*، مما يتيح بث المكالمات والموسيقى مباشرة على iOS و Android</li>
            <li>2 وحدة معالجة متكاملة تسمح بإنتاج صوت واضح ومميز.</li>
            <li>تصميم جديد أصغر وأنحف</li>
            <li>3 خيارات للشحن (شاحن محمول ، قياسي وDry&Clean) لـ Pure C&G AX وحجرة للبطارية لـ Pure 312 AX</li>
        </ul>
</div>
<div class="container">
        <div class="image-wrapper">
        <h3>تفاصيل السماعة الطبية</h3>
        <div style='display: flex;  position: relative;'>
    <img src="pic6.png" alt="Your Image">
    <img src="pic7.png" class="icon" style="width: 150px; height: 100px; position: absolute; bottom: 20px; right: -40px;">
   </div>
        </div>
        <ul class="info-list">
            <li><img src="baterie_icon.png" class='icon'> <img src="face_icon.png"> <img src="bleuth_icon.png"> <img src="tele_icon.png"></li>
            <li>النمط: خلف الأذن (BTE)</li>
            <li>حجم البطارية: 13</li>
            <li>البطارية غير قابلة للشحن: لا</li>
            <li>ضمان الشركة المصنعة: ضمان لمدة 4 سنوات</li>
            <li>الخسارة / الضرر: ضمان الشركة المصنعة لمدة 12 شهرًا</li>
            <li>Bluetooth / لاسلكي: نعم</li>
            <li>بث الصوت المباشر: iPhone ، Android (a)</li>
            <li>تطبيق الهاتف الذكي: iPhone ، Android ، ضمان تفوق السعر 5٪</li>
        </ul>
</div>
<?php include('pie_de_page_ar.html') ?>
</body>
</html>
