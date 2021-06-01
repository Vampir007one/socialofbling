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
    <title>Редактирование новости</title>
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
        <?php
            include('menu.php');
            $newsQuery = $db -> query("SELECT * FROM `news` WHERE `id` = '$_GET[id]'");
            $news = mysqli_fetch_array($newsQuery);
        ?>
    </div>
    <div style="width: 100%; min-height: 500px; display: flex; justify-content: center; align-items: center;">
        <form action="" method="post" enctype="multipart/form-data" style="display: flex; flex-flow: column; width: 50%">
            <input type="text" name="title" id=""  style="margin-top: 10px; padding: 10px;" value="<?= $news['title']?>">
            <input type="text" name="desc" id=""  style="margin-top: 10px; padding: 10px;" value="<?= $news['description']?>">
            <textarea name="text" id="" cols="30" rows="10"  style="margin-top: 10px; padding: 10px;"><?= $news['text']?></textarea>
            <input type="file" name="picture" id="" style="margin-top: 10px; padding: 10px;">
            <input type="submit" value="Добавить новость" style="margin-top: 10px; padding: 10px;">
            <?php
            if(isset($_POST['title']) && isset($_POST['desc']) && isset($_POST['text']) && isset($_FILES['picture']['name']))
            {
                if($_POST['title'] != '' && $_POST['desc'] != '' && $_POST['text'] != '' && $_FILES['picture']['name'] != '')
                {
                    if($_FILES['picture']['type'] == 'image/jpg' || $_FILES['picture']['type'] == 'image/jpeg' || $_FILES['picture']['type'] == 'image/png')
                    {
                        $uploads_dir = '/uploads';
                        $tmp_name = $_FILES["picture"]["tmp_name"];
                        $name = basename($_FILES["picture"]["name"]);
                        $uploaded = move_uploaded_file($_FILES['picture']['tmp_name'], 'uploads/'.$_FILES['picture']['name']);
                        $pathFile = "uploads/". $_FILES['picture']['name'];
                        if($uploaded)
                        {
                            $uploadToDb = $db ->query("
                                UPDATE
                                `news`
                                SET
                                `title` = '$_POST[title]',
                                `description` = '$_POST[desc]',
                                `text` = '$_POST[text]',
                                `path_picture` = '$pathFile'
                                WHERE
                                `id` = '$news[id]'");
                            if($uploadToDb)
                            {
                                echo "Новость успешно изменена";
                            }
                            else
                            {
                                echo "Что-то пошло не так";
                            }
                        }
                    }
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