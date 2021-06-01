<?php
    session_start();
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
        <div class="block_news"> 
            <a href="#">
                <div class="news1">
                    <div class="text_news_1">
                        <p>ПАСХА СВЕТЛАЯ</p>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="news2">
                    <div class="text_news_2">
                        <p>САМЫЕ ТАЛАНТЛИВЫЕ</p>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="news3">
                    <div class="text_news_2">
                        <p>ИГРА УМА</p>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="news4">
                    <div class="text_news_2">
                        <p>ИГРА УМА</p>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="news5">
                    <div class="text_news_2 ">
                        <p>Литературный Фестиваль Поволжья </p>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="news6">
                    <div class="text_news_1">
                        <p>Медовый, яблочный, ореховый спасы</p>
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
          <div class="mySlides fade">
            <img src="./img/1.jpg" style="max-width:100%;">
          </div>
        
          <div class="mySlides fade">
            <img src="./img/2.jpg" style="max-width:100%;">
          </div>
        
          <div class="mySlides fade">
            <img src="./img/3.jpg" style="max-width:100%;">
          </div>
        
          <div class="mySlides fade">
            <img src="./img/4.jpg" style="max-width:100%;">
          </div>
        
          <div class="mySlides fade">
            <img src="./img/5.jpg" style="max-width:100%;">
          </div>
        
          <div class="mySlides fade">
            <img src="./img/6.jpg" style="width:100%;">
          </div>
        
          <div class="mySlides fade">
            <img src="./img/8.jpg" style="max-width:100% ;">
          </div>
        
          <div class="mySlides fade">
            <img src="./img/9.jpg" style="max-width:100%;">
          </div>
        
          <!-- Next and previous buttons -->
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
          <p>Больше впечатлений в нашей группе в вк</p>
        <a href="https://vk.com/albums-84382652"class="btn1">Узнать больше</a>
        </div>
        <br>
        </div> 
    <!-- наши видео -->
    <div class="video">
        <h1>Наши видео</h1>
        <div class="videos">
            <div class="video_1">
                <iframe src="https://vk.com/video_ext.php?oid=-84382652&id=456239085&hash=749e2371c582c698&hd=2" width="532" height="323" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="video_2">
                <iframe src="https://vk.com/video_ext.php?oid=177258358&id=456239352&hash=99fa1596f534f704&hd=2" width="532" height="323" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="video_3">
                <iframe src="https://vk.com/video_ext.php?oid=-84382652&id=456239083&hash=1bba4a62186ac9a7&hd=2" width="532" height="323" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="video_4">
                <iframe src="https://vk.com/video_ext.php?oid=-84382652&id=456239079&hash=883033f72949282d&hd=2" width="532" height="323" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
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