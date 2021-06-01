<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/img/Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style/Contact.css">
    <script src="script/script.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Общероссийское общество слепых</title>
    <script src="https://lidrekon.ru/slep/js/jquery.js"></script>
    <script src="https://lidrekon.ru/slep/js/uhpv-full.min.js"></script>
</head>
<body>
    <a id="upbutton" href="#" onclick="smoothJumpUp();  return false;">
        <img src="/images/up.png" alt="">
    </a>
    <div class="slep_btn">
      <a id="specialButton" href="#"><img src="img/glaz.svg" style="background: black;" alt="ВЕРСИЯ ДЛЯ СЛАБОВИДЯЩИХ" title="ВЕРСИЯ ДЛЯ СЛАБОВИДЯЩИХ" /></a>
        <p>Версия для слабовидящих</p>
    </div>
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
        <ul>
            <li><a href="index.php">Главная</a></li>
            <li><a href="about_organisation.php">Об организации</a></li>
            <li><a href="all_news.php">Новости</a></li>
            <li><a href="documets.php">Документы</a></li>
            <li><a href="contact.php">Контакты</a></li>
        </ul>
    </div>
    <div class="contacts">
        <h1>Контакты</h1>
        <div class="block1">
            <h3>Главный офис</h3>
            <p>
                 <b>Фактический адрес:</b> РФ, Самарская область, г.Тольятти,<br>
                   Фрунзе, д. 17, оф. 254 <br>
                  <br>

 <b>тел.</b> 8482 35-04-52 <br>
 <b>e-mail</b> tatyana-koroleva-1976@mail.ru <br>
 <b>время работы:</b> пн-чт: с 9.00 до 13.00; пт-вс: выходной. <br>
 <br>

 <b> Как добраться на общественном транспорте:</b> <br>
Маршрутные автобусы № 91, 93, 108, 124, 126, 127, 201, 303, <br>
 310,  326. 
Автобусы № 2, 11т, 16, 23, 23в, 30
 <br>
            </p>
        </div>
        <div class="block2">
            <h3>Библиотека для слабовидящих</h3>
            <p>
                 <b>Фактический адрес:</b> РФ, Самарская область, г.Тольятти, <br>
                  ул.Мира 41, оф. 41 <br>
                  <br>

 <b>тел.</b> 8482 22-13-10 <br>
 <b>время работы:</b> среда с 9.00 до 15.00 <br>
 <br>

 <b>Как добраться на общественном транспорте:</b> <br>
Маршрутные автобусы № 91, 93,  310, 328 <br>
Автобусы № 40 <br>
Троллейбусы № 1, 2, 4, 7 <br>
            </p>
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
      <!-- Модальное окно входа -->
      <div id="login" class="modal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
      
              <a href="#close" title="Close" class="close">
              </a>
            </div>
            <div class="modal-body">    
              <div class="input">
                <form action="">
                  <input type="text" id="name" name="name" placeholder="Логин" required>
                  <input type="password" id="patronymic" name="patronymic" placeholder="Пароль" required>
                  <input type="submit" id="save" value="Войти">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- подвал -->
    <footer >
        <div class="content">
            <div class="header_menu">
                <ul>
                    <li><a href="#">Главная</a></li>
                    <li><a href="#">Об организации</a></li>
                    <li><a href="#">Новости</a></li>
                    <li><a href="#">Документы</a></li>
                    <li><a href="#">Контакты</a></li>
                </ul>
            </div>
            <div class="info">
                <p style="margin: 0; margin-bottom: 10px;">Всероссийское общество слепых г. Тольятти:</p>
                <p style="margin: 0; margin-bottom: 10px;">Фактический адрес: РФ, Самарская область, г. Тольятти, Фрунзе, д. 17, оф. 254</p>
                <p style="margin: 0; margin-bottom: 10px;">Телефон: 8482 35-04-52</p>
                <p style="margin: 0; margin-bottom: 42px;">e-mail: tatyana-koroleva-1976@mail.ru</p>
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