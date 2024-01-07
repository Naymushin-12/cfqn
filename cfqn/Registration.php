<?php
include("path.php");
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <!-- Подключение собственного файла css-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
    <!-- подключение гугл фонтс-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
</head>


<body>
<?php 
include("application/include/header.php");
?>
    <div class="container">
        <form class="reg" method="post" action="Registration.php">
            <h3>Регистрация</h3>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Логин</label>
                <input type="text" class="form-control" id="FromGroupExampleInput" aria-describedby="Пример подсказки">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Адрес Электронной почты</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Мы никогда никому не передадим ваши данные.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Возраст</label>
                <input type="text" class="form-control" id="FromGroupExampleInput" aria-describedby="Пример подсказки">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Пароль</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword2" class="form-label">Подтвердить пароль</label>
                <input type="password" class="form-control" id="exampleInputPassword2">
            </div>
            <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
            <a href="auth.php">Авторизоваться</a>
            <div class="form-text1">Если уже регистрировались</div>
        </form>
    </div>
</body>