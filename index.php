<?php
    session_start();
    include ("connect.php");
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
    <title>Общероссийское общество слепых</title>
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
    <!-- приветствие -->
    <div class="hello">
        <div class="inner">
            <h1>Мир без границ</h1>
            <a href="about_organisation.php" class="btn">Узнать больше</a>
        </div>
    </div>
    <!-- гимн -->
    <div class="gimn">
        <h1>Гимн для общества слепых</h1>
        <div class="gimn_text">Мы любимой Родине верны!
            В нашей дружбе и единстве сила!
            Мы своей судьбой закалены,
            Твёрдость духа нас объединила!
            В жизни нет для нас дорог простых,
            Но к вершинам мы всегда стремимся!
            Всероссийским обществом слепых
            Мы с любовью искренне гордимся!<br>
            <br>
            ПРИПЕВ: <br>
            <br>
            Мы живём семьёй одной,
            Чтоб дерзать и не сдаваться,
            Видеть сердцем мир земной
            И рукою звёзд касаться!
            Мы живём семьёй одной,
            Чтоб дерзать и не сдаваться,
            Видеть сердцем мир земной
            И рукою звёзд касаться!<br>
            <br>
            Взяв друг друга за руки, идём
            Мы в цеха, спортзалы и на сцену
            И к победам бережно ведём
            За собой талантливую смену.
            Наше знамя высоко несём
            И сердца охвачены волненьем!
            Счастье сами создаём трудом
            И готовы к новым достиженьям!<br>
            <br>
            ПРИПЕВ:<br>
            <br>
            Мы живём семьёй одной,
            Чтоб дерзать и не сдаваться,
            Видеть сердцем мир земной
            И рукою звёзд касаться!
            Мы живём семьёй одной,
            Чтоб дерзать и не сдаваться,
            Чтобы светлая мечта
            За собою нас вела!</div>
            <div class="flag_slepih"><img src="img/flagslep.png" alt=""></div>

            <div class="audio">
                <audio controls>
                    <source src="sound/Gimn.mp3" type="audio/mpeg">
                </audio>
                <p>Аудио версия гимна</p>
            </div>
    </div>
    <!-- новости -->
    <div class="news">
        <h1>ВОС в центре событий</h1>
        <?php
            $getId = $db -> query("SELECT `id` FROM `news` ORDER BY `id` desc");
            $id = mysqli_fetch_array($getId);
            $mass[] = '';
            do
            {
                array_push($mass, $id['id']);
            }
                while($id = mysqli_fetch_array($getId));
        ?>
        <div class="block_news">
            <?php
                $firstNewsQuery = $db -> query("SELECT * FROM `news` WHERE `id` = '$mass[1]'");
                $firstNews = mysqli_fetch_array($firstNewsQuery);
                $SecondNewsQuery = $db -> query("SELECT * FROM `news` WHERE `id` = '$mass[2]'");
                $SecondNews = mysqli_fetch_array($SecondNewsQuery);
                $ThirdNewsQuery = $db -> query("SELECT * FROM `news` WHERE `id` = '$mass[3]'");
                $ThirdNews = mysqli_fetch_array($ThirdNewsQuery);
                $FourthNewsQuery = $db -> query("SELECT * FROM `news` WHERE `id` = '$mass[4]'");
                $FourthNews = mysqli_fetch_array($FourthNewsQuery);
                $FifthNewsQuery = $db -> query("SELECT * FROM `news` WHERE `id` = '$mass[5]'");
                $FifthNews = mysqli_fetch_array($FifthNewsQuery);
                $SixthNewsQuery = $db -> query("SELECT * FROM `news` WHERE `id` = '$mass[6]'");
                $SixthNews = mysqli_fetch_array($SixthNewsQuery);
            ?>
            <a href="news_more.php?id=<?php echo $firstNews['id']?>">
                <div class="news1" style="background: url(<?php echo $firstNews['path_picture']?>) center no-repeat; background-size: cover;">
                    <div class="text_news_1">
                        <p><?php echo $firstNews['title']?></p>
                    </div>
                </div>
            </a>
            <a href="news_more.php?id=<?php echo $SecondNews['id']?>">
                <div class="news2" style="background: url(<?php echo $SecondNews['path_picture']?>) center no-repeat; background-size: cover;">
                    <div class="text_news_2">
                        <p><?php echo $SecondNews['title']?></p>
                    </div>
                </div>
            </a>
            <a href="news_more.php?id=<?php echo $ThirdNews['id']?>">
                <div class="news3" style="background: url(<?php echo $ThirdNews['path_picture']?>) center no-repeat; background-size: cover;">
                    <div class="text_news_2">
                        <p><?php echo $ThirdNews['title']?></p>
                    </div>
                </div>
            </a>
            <a href="news_more.php?id=<?php echo $FourthNews['id']?>">
                <div class="news4" style="background: url(<?php echo $FourthNews['path_picture']?>) center no-repeat; background-size: cover;">
                    <div class="text_news_2">
                        <p><?php echo $FourthNews['title']?></p>
                    </div>
                </div>
            </a>
            <a href="news_more.php?id=<?php echo $FifthNews['id']?>">
                <div class="news5" style="background: url(<?php echo $FifthNews['path_picture']?>) center no-repeat; background-size: cover;">
                    <div class="text_news_2 ">
                        <p><?php echo $FifthNews['title']?></p>
                    </div>
                </div>
            </a>
            <a href="news_more.php?id=<?php echo $SixthNews['id']?>">
                <div class="news6" style="background: url(<?php echo $SixthNews['path_picture']?>) center no-repeat; background-size: cover;">
                    <div class="text_news_1">
                        <p><?php echo $SixthNews['title']?></p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!-- наши фото -->
    <div class="photo">

        <!-- Slideshow container -->
        <div class="slideshow-container">
          <h1>Наши фотографии</h1>
          <!-- Full-width images with number and caption text -->
            <?php
                $getpictureQ = $db -> query("SELECT * FROM `pictureonslide`");
                $pictureSlide = mysqli_fetch_array($getpictureQ);
                do
                {
print <<<HERE
                <div class="mySlides fade">
                    <img src="$pictureSlide[path_picture]" style="max-width:100%;">
                </div>
HERE;
                }
                while ($pictureSlide = mysqli_fetch_array($getpictureQ));
            ?>
          <!-- Next and previous buttons -->
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
            <?php
                if(isset($_SESSION['login']))
                {
print <<<HERE
                    <h3 style="text-align: center"><a href="picture_cp.php">Перейти в панель управления фотографиями</a></h3>
HERE;

                }
            ?>
          <p>Больше впечатлений в нашей группе в вк</p>
        <a href="https://vk.com/albums-84382652"class="btn1">Узнать больше</a>
        </div>
        <br>
        </div> 
    <!-- наши видео -->
    <div class="video">
        <h1>Наши видео</h1>
        <div class="videos">
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
            <div class="video_1">
                <?php echo $firstVideo['link']?>
            </div>
            <div class="video_2">
                <?php echo $secondVideo['link']?>
            </div>
            <div class="video_3">
                <?php echo $thirdVideo['link']?>
            </div>
            <div class="video_4">
                <?php echo $fourthVideo['link']?>
            </div>
        </div>

        <?php
            if(isset($_SESSION['login']))
            {
                echo '<h4><a href="videoedit.php">Изменить видеоряд</a></h4>';
            }
        ?>
        <a href="https://vk.com/videos-84382652"class="btn1" style="color:black; margin-top: 44px;margin-left: 0;line-height: 25px;" >Больше видео</a>    
        </div>
    </div>
    <!-- карта -->
    <div class="map">
  
        <h1>Как нас найти:</h1>
        
       
      
          <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A4b4142cf1d4a5b11ed6205af3e41a6294533e83c67f0b2ccb2372f6c474a5a1c&amp;width=100%&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
          <div class="qwer">
            <p><b>Офис:</b> <br>
              г.Тольятти, ул.Фрунзе 17 <br>
              <b>35-04-52</b>
            </p>
          </div>
          <div class="qwer2">
            <p><b>Библиотека для слабовидящих:</b><br>
              г.Тольятти, Мира, 41, оф.41</p>
          </div>
      </div>
      <script src="script/JavaScript.js"></script>
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