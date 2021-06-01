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
                    <form action="" method="post">
                        <input type="text" id="name" name="login" placeholder="Логин" required>
                        <input type="password" id="patronymic" name="pwd" placeholder="Пароль" required>
                        <?php
                        //                    connect db
                        include ('connect.php');
                        //                        check isset fields
                        if(isset($_POST['login']) && isset($_POST['pwd']))
                        {
//                            check what field is fill
                            if($_POST['login'] != '' && $_POST['pwd'] != '')
                            {
////                                queries to db
                                $getUser = $db->query("SELECT * FROM `users` WHERE `login` = '$_POST[login]'");
                                $user = mysqli_fetch_array($getUser);
////                              check passwords
                                if($user['password'] == $_POST['pwd'])
                                {
                                    $_SESSION['username'] = $user['username'];
                                    $_SESSION['login'] = $user['login'];
                                    echo "Вы авторизированы. <br> Добро пожаловать, <b>{$user['username']}</b>";
                                    echo "<script>location.href='/';</script>";

                                }
                                else
                                {
                                    echo "Что-то не так, мы вас не узнаём!";
                                }
                            }
                        }
                        ?>
                        <input type="submit" id="save" value="Войти">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
