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
    <div style="width: 100%; min-height: 500px; display: flex; justify-content: center; align-items: center; flex-flow: column">
        <h4>Выберите функционал, который вам нужен</h4>
        <h5>Удалить старые картинки</h5>
        <form action="" method="post" style="display: flex; flex-flow: column">
            <input type="submit" value="Удалить старые картинки" name="deletePic">
            <?php
                if(isset($_POST['deletePic']))
                {
                    $getpictureQ = $db -> query("SELECT `id` FROM `pictureonslide`");
                    $pictureId = mysqli_fetch_array($getpictureQ);
                    do
                    {
                        $deletePic = $db->query("DELETE FROM `pictureonslide` WHERE `id` = '$pictureId[id]'");
                    }
                    while ($pictureId = mysqli_fetch_array($getpictureQ));
                    if(isset($deletePic))
                    {
                        echo "Удаление прошло успешно можете загружать картинки";
                    }
                }
            ?>
        </form>
        <h5>Добавление  новых картинок</h5>
        <p>Выделяйте не больше 10 картинок</p>
        <form action="" method="post" enctype="multipart/form-data" style="display: flex; flex-flow: column">
            <input multiple type="file" name="pictures[]" id="">
            <input type="submit" value="Загрузить картинки" style="margin-top: 10px">
            <?php

                function reArrayFiles(&$file_post) {
                    $file_ary = array();
                    $file_count = count($file_post['name']);
                    $file_keys = array_keys($file_post);

                    for ($i=0; $i<$file_count; $i++) {
                        foreach ($file_keys as $key) {
                            $file_ary[$i][$key] = $file_post[$key][$i];
                        }
                    }

                    return $file_ary;
                }

                ?>
                <?php
                    if (isset($_FILES['pictures']['name'])) {
                        $file_ary = reArrayFiles($_FILES['pictures']);
                        $count = 0;
                        foreach ($file_ary as $file)
                        {
//                            print 'File Name: ' . $file['name'] . '<br>';
//                            print 'File Type: ' . $file['type'] . '<br>';
//                            print 'File Size: ' . $file['size'] . '<br>';
//                            print 'File TMP: ' . $file['tmp_name'] . '<br>';
                              $count++;
                              if($file['type'] == 'image/jpg' || $file['type'] == 'image/png' || $file['type'] == 'image/jpeg' || $file['type'] == 'image/gif')
                              {
                                  if ($count <= 10)
                                  {
                                      $uploaded = move_uploaded_file($file['tmp_name'], 'uploads/picture/'. $file['name']);
                                      $pathFile = "uploads/picture/". $file['name'];
                                      if(isset($uploaded))
                                      {
                                          $uploadDB = $db -> query(" INSERT INTO `pictureonslide`(`path_picture`) VALUES ('$pathFile')");
                                      }
                                  }
                              }
                        }
                        if($uploadDB)
                        {
                            echo "<p>Картинки успешно загружены в слайдер</p>";
                        }
                        else
                        {
                            echo '<pЗагрузить картинки не удалось</p>';
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