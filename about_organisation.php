<?php session_start();?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/img/Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="/style/about_organisation.css">
    <script src="script/script.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> -->
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
    <!-- об организации -->
    <a id="about">
    <div class="block_about">
    <h1>Об организации</h1>
    <div class="about_menu" id="menu">
        <ul>
            <li><a href="#about">Об организации</a></li>
            <li><a href="#service">Наши услуги</a></li>
            <li><a href="#staff">Наши сотрудники</a></li>
        </ul>
    </div>
    <div class="about">
        <img src="img/flagslep.png" alt="">
        <p>Увеличение числа нуждающихся в работе людей вызывало необходимость нового подхода к решению этой проблемы, и Самарский областной
            отдел ВОС принимает решение о создании
            собственных учебно-производственных мастерских
            (УПМ). Эту работу возглавил бывший офицер-
           фронтовик Клюков Василий Михайлович, имеющий
            высшее экономическое образование, который в
            1944 году сменил Трутнева И.Г. на посту
            председателя областного отдела. <br> <br>
           
           Первая УПМ была создана в 1946 году в г. Сызрани.
            Затем открываются мастерские в городах
            Чапаевске, Похвистнево, Куйбышеве. Мастерские
            выпускали щеточные изделия, веревку, бельевые
            прищепки, картонную тару, скобяные изделия,
            освоили выпуск электрических фонариков. К концу
            50-х годов процесс становления УПМ был
            завершен. Наличие пяти мастерских позволило
            практически решить проблему трудового
            устройства инвалидов по зрению. </p>
    </div>
    <div class="link">
        <ul>
            <li><a href="https://mintrud.gov.ru"><img src="img/min_truda.png" alt=""><p>Министерство труда и социальной защиты РФ</p></a></li>
            <li><a href="https://minzdrav.gov.ru/"><img src="img/min_zdrav.png" alt=""><p>Министерство здравоохранения РФ</p></a></li>
            <li><a href="https://www.popechitely.ru/"><img src="img/sovet.png" alt=""><p>Совет при Правительстве РФ по вопросам попечительства в социальной сфере</p></a></li>
            <li><a href="https://www.vos.org.ru/"><img src="img/vseros.png" alt=""><p>Всероссийское общество слепых</p></a></li>
        </ul>
    </div>
    </div>
    </a>
    <!-- услуги -->
    <a id="service">
    <div class="service_block">
        <h1>Социальные услуги предоставляемые организацией</h1>
        <div class="service">
            <ol>
                <li>Проведение мероприятий по обучению профессиональным навыкам;</li>
                <li>Содействие в обеспечении техническими средствами ухода и реабилитации;</li>
                <li>Содействие в получении консультативной помощи;</li>
                <li>Организация культурно-досуговых и спортивно-оздоровительных мероприятий;</li>
                <!-- <li>Оказание благотворительной помощи в денежном и натуральном виде;</li> -->
                <li>Оказание морально-психологической поддержки;</li>
                <li>Проведение реабилитационных мероприятий;</li>
                <li>Содействие в посещении театров, выставок и других культурных мероприятий.</li>
            </ol>
        </div>
    </div>
</a>
    <!-- сотрудники -->
    <a id="staff"></a>
    <div class="staff_block">
        <h1>Сотрудники</h1>
        <div class="staff_type_1">
            <img src="img/shum.jpg" alt="">
            <p>Ф.И.О: и.о Шумакова Наталья Анатольевна
                <br>
                <br>
                Должность: Председатель</p>
        </div>
        <div class="staff_type_2">
            <p>Ф.И.О Королева Татьяна Владимировна
                <br>
                <br>
                
                Должность: Секретарь</p>
            <img src="img/tat.jpg" alt="">
        </div>
        <div class="staff_type_1">
            <img src="img/hud.jpg" alt="">
            <p>Ф.И.О Демченко Юлия Владимировна
                <br>
                <br>
                Должность: Художественный руководитель</p>
        </div>
        <div class="staff_type_2">
            <p>Ф.И.О Королева Татьяна Владимировна
                <br>
                <br>
                Должность: Библеотекарь </p>
                <img src="img/6.jpg" alt="">
        </div>
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