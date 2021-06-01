<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/img/Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style/all_news.css">
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
        <a id="specialButton" href="#"><img src="img/glaz.svg" alt="ВЕРСИЯ ДЛЯ СЛАБОВИДЯЩИХ" title="ВЕРСИЯ ДЛЯ СЛАБОВИДЯЩИХ" /></a>
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
    <!-- Новости -->
    <div class="new">
        <h1>Новости</h1>
        <div class="news-item-1">
            <div class="news-item-1-block1">
                <img src="./img/7.jpg" alt="">
            </div>
            <div class="news-item-1-block2">
                <h3>Литературный фестиваль поволжья</h3>
                <p>
                    НОВОСТИ ИЗ ТОЛЬЯТИ. ДОСТИЖЕНИЯ НЕЗРЯЧИХ ЛЮДЕЙ.
                    Хотим познакомить вас с инвалидом по зрению и ДЦП с детства
                    Геттой Маркеловской.
                    Поэтессой - и писательницей из Тольяти.
                    Генриетта - СЛЕПАЯ Поэтесса, Христианка.
                </p>
                <a href="#"class="btn1">Узнать больше</a>
            </div>
            <br class="clear">
            
        </div>

        <div class="news-item-2">
            <div class="news-item-1-block1">
                <img src="./img/4.jpg" alt="">
            </div>
            <div class="news-item-1-block2">
                <h3>Самые талантливые</h3>
                <p>
                    Самым талантливым и целеустремленным!
                    В Международный день инвалидов в администрации
                     Тольятти прошла церемония вручения именных премий 
                     главы городского округа для лиц с ограниченными 
                     возможностями здоровья и добровольцев.
                </p>
                <a href="news_more.php" class="btn1">Узнать больше</a>
            </div>
            <br class="clear">
            
        </div>

        <div class="news-item-3">
            <div class="news-item-1-block1">
                <img src="./img/5.jpg" alt="">
            </div>
            <div class="news-item-1-block2">
                <h3>Театр для всех</h3>
                <p>
                    Стоп! Анонс! Сенсация! Впервые в г. Тольятти
                     на сцене Тольяттинского Театра Кукол 7мая 2021г.
                      была представлена постановка "Марьйно поле" с
                       тифло-комментарием! Комментарий вела специалист
                        высшей категории Таис Марченко. Это поистине
                         колоссальный прорыв в нашем городе! Всероссийское
                          общество слепых сердечно благодарит всех участников
                           данного проекта! Спасибо ещё за один шаг в доступной
                            среде для молобольных граждан! Браво так держать! Апплодируем стоя!
                </p>
                <a href="#"class="btn1">Узнать больше</a>
            </div>
            <br class="clear">
        </div>
        
    </div>
    <br class="clear">
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