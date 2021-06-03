<?php
    session_start();
    include("connect.php");
    if(!isset($_SESSION['login']))
    {
        echo "<script>location.href='/all_news.php';</script>";
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/img/axialisiconworkshop_2938.ico" type="image/x-icon">
    <link rel="stylesheet" href="style/style.css">
        <script src="script/script.js"></script>
        <!-- <script src="https://code.jquery.com/jquery-git.min.js"></script> -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Добавление новостей</title>
    <script src="https://lidrekon.ru/slep/js/jquery.js"></script>
    <script src="https://lidrekon.ru/slep/js/uhpv-full.min.js"></script>
</head>
<body>
    <!-- кнопка "вверх" -->
    <a id="upbutton" href="index.php" onclick="smoothJumpUp();  return false;">
        <img src="/img/up.png" alt="">
    </a>
    <!-- кнопка для слабовидящих -->
    <div class="slep_btn">
        <a id="specialButton" href="#"><img src="img/glaz.svg" alt="ВЕРСИЯ ДЛЯ СЛАБОВИДЯЩИХ" title="ВЕРСИЯ ДЛЯ СЛАБОВИДЯЩИХ" /></a>
        <p>Версия для слабовидящих</p>
    </div>
    <!-- шапка -->
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
            <?php
                if(isset($_SESSION['login']))
                {
                    echo '<a style="align-items: center" href="logout.php">Выход</a>';
                }
                else
                {
                    echo '<a href="#login"><img src="img/admin.png" alt=""></a>';
                }
            ?>
        </div>
    </header>
    <div class="header_menu">
        <?php include('menu.php');?>
    </div>
    <div style="width: 100%; min-height: 500px; display: flex; justify-content: center; align-items: center;">
        <?php
            $getVideoId = $db -> query("SELECT `id` FROM `videos`");
            $videoId = mysqli_fetch_array($getVideoId);
            $videoMass[] = '';
            do
            {
                array_push($videoMass, $videoId['id']);
            }
            while($videoId = mysqli_fetch_array($getVideoId));

            $firstVideoQ = $db -> query("SELECT * FROM `videos` WHERE `id` = '$videoMass[1]'");
            $firstVideo = mysqli_fetch_array($firstVideoQ);
            $secondVideQ = $db -> query("SELECT * FROM `videos` WHERE `id` = '$videoMass[2]'");
            $secondVideo = mysqli_fetch_array($secondVideQ);
            $thirdVideQ = $db -> query("SELECT * FROM `videos` WHERE `id` = '$videoMass[3]'");
            $thirdVideo = mysqli_fetch_array($thirdVideQ);
            $fourthVideQ = $db -> query("SELECT * FROM `videos` WHERE `id` = '$videoMass[4]'");
            $fourthVideo = mysqli_fetch_array($fourthVideQ);
        ?>
        <form action="" method="post" style="display: flex; flex-flow: column; width: 50%">
            <label for="one">Первое видео</label>
            <textarea name="linkOne" id="one" cols="5" rows="5"><?php echo $firstVideo['link']?></textarea>
            <label for="two">Второе видео</label>
            <textarea name="linkTwo" id="two" cols="5" rows="5"><?php echo $secondVideo['link']?></textarea>
            <label for="three">Третье видео</label>
            <textarea name="linkThree" id="three" cols="5" rows="5"><?php echo $thirdVideo['link']?></textarea>
            <label for="four">Чётвертое видео</label>
            <textarea name="linkFour" id="four" cols="5" rows="5"><?php echo $fourthVideo['link']?></textarea>
            <input type="submit" value="Добавить выбранные видео" name="uploadLink">

            <?php
                if(isset($_POST['uploadLink']))
                {
                    $updateLinkOne = $db ->query("
                        UPDATE `videos` SET `link` = '$_POST[linkOne]' WHERE `videos`.`id` = 1;
                    ");
                    $updateLinkTwo = $db ->query("
                        UPDATE `videos` SET `link` = '$_POST[linkTwo]' WHERE `videos`.`id` = 2;
                    ");
                    $updateLinkThree = $db ->query("
                        UPDATE `videos` SET `link` = '$_POST[linkThree]' WHERE `videos`.`id` = 3;
                    ");
                    $updateLinkFour = $db ->query("
                        UPDATE `videos` SET `link` = '$_POST[linkFour]' WHERE `videos`.`id` = 4;
                    ");
                    if(isset($updateLinkOne) && isset($updateLinkTwo) && isset($updateLinkThree) && isset($updateLinkFour))
                    {
                        echo "<p>Видео успешно заменены</p>";
                    }
                }
            ?>
        </form>

    </div>
    <!--  модальное окно  -->
    <?php include('authorization.php')?>
    <!-- подвал -->
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
    </footer>
</body>
</html> 