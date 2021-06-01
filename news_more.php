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
    <div class="block_news">
        <h1>САМЫЕ ТАЛАНТЛИВЫЕ</h1>
        <img src="img/nagrada.jpg" alt="">
        <p>Самым талантливым и целеустремленным!

            В Международный день инвалидов в администрации Тольятти прошла церемония вручения именных премий главы городского округа для лиц с ограниченными возможностями здоровья и добровольцев.
            
            В этом году в конкурсе приняли участие 59 номинантов. Экспертные советы определили 18 победителей в девяти номинациях конкурса - в области образования и науки, литературы и искусства, спорта, изобразительного искусства и прикладного творчества.
            
            Перед началом награждения собравшихся поприветствовал глава Тольятти Сергей Анташев. В 2020 году именные премии главы городского округа Тольятти были присуждены: Елене Гурьевой, Надежде Гранченко, Юлии Демченко, Ольге Леонтьевой, Евгению Степочкину, Елене Захаровой, Наталье Петряковой, Ольге и Софье Шемякиным, Елене Саксоновой, Илье Нарубину, Кариму Калимуллину, Богдану Абрамову, Сергею Сухареву, Светлане Кладовщиковой.
            
            Отдельных слов благодарности и именных стипендий главы удостоились волонтеры, которые по велению души и сердца помогают людям с ограниченными возможностями здоровья, проявляя чуткость и сострадание.
            В номинации «За социальную активность и милосердие» дипломы победителей получили:
            Ирина Шапорева – автор проектов и организатор мероприятий на базе АНО «Центр иппотерапии «Живой мир»;
            Екатерина Учаева и коллектив добровольцев общественной организации «Дети-ангелы»;
            Елизавета Селецкая - медсестра неврологического отделения ТГКБ №5, помогает лечить и реабилитировать пациентов, в том числе после инсульта.</p>
    </div>
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