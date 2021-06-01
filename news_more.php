<?php session_start();?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/img/Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="/style/news_more.css">
    <script src="script/script.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Общероссийское общество слепых</title>
    <script src="https://lidrekon.ru/slep/js/jquery.js"></script>
    <script src="https://lidrekon.ru/slep/js/uhpv-full.min.js"></script>
</head>
<body>
    <div class="slep_btn">
        <a id="specialButton" href="#"><img src="img/glaz.svg" alt="ВЕРСИЯ ДЛЯ СЛАБОВИДЯЩИХ" title="ВЕРСИЯ ДЛЯ СЛАБОВИДЯЩИХ" /></a>
        <p>Версия для слабовидящих</p>
    </div>
    <a id="upbutton" href="index.php" onclick="smoothJumpUp();  return false;">
        <img src="/images/up.png" alt="">
    </a>
    <header>
        <div class="logo">
            <a href="index.php"><img src="img/Logo.png" alt=""></a>
        </div>
        <div class="header_title">
            Всероссийское общество слепых г. Тольятти
            Общественная организация
        </div>
        <div class="src">
            <form class="search">
                <input type="text" placeholder="Поиск по сайту" name="search">
                <button type="submit"><img src="img/search.svg" alt=""></button>
            </form>
        </div>
        <div class="login">
            <a href="#login"><img src="img/admin.png" alt=""></a>
        </div>
    </header>
    <div class="header_menu">
        <?php include('menu.php');?>
    </div>
    <!-- новость -->
    <?php
        include('connect.php');
        $getNewsQuery = $db -> query("SELECT * FROM `news` WHERE `id` = '$_GET[id]'");
        $newsOne = mysqli_fetch_array($getNewsQuery);
print <<<HERE
        <div class="block_news">
            <h1>$newsOne[title]</h1>
            <img src="$newsOne[path_picture]" alt="">
            <p>
                $newsOne[text]
            </p>
        </div>
HERE;

    ?>

    <footer >
        <div class="content">
            <div class="header_menu">
                <?php include('menu.php');?>
            </div>
            <div class="info">
                <p style="margin: 0; margin-bottom: 10px;"><b>Всероссийское общество слепых г. Тольятти:</b></p>
                <p style="margin: 0; margin-bottom: 10px;"><b>Фактический адрес:</b> РФ, Самарская область, г. Тольятти, Фрунзе, д. 17, оф. 254</p>
                <p style="margin: 0; margin-bottom: 10px;"><b>Телефон:</b> 8482 35-04-52</p>
                <p style="margin: 0; margin-bottom: 42px;"><b>e-mail:</b> tatyana-koroleva-1976@mail.ru</p>
            </div>
            <div class="social">
                <p style="margin: 0;">Обратная связь:</p>
                <a href="https://vk.com/public84382652"><img src="/img/social/VK Circled.png" alt=""></a>
                <a href="mailto:tatyana-koroleva-1976@mail.ru"><img src="/img/social/Email.png" alt=""></a>
            </div>
            <div class="cinz">© 1925-2021 «Всероссийское общество слепых Тольяттинское отделение»</div>
        </div>
        <!--  модальное окно  -->
        <?php include('authorization.php')?>
    </footer>
</body>
</html>