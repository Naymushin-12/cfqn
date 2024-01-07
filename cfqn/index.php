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
    <!-- подключение гугл фонтс-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
</head>


<body>
<?php 
include("application/include/header.php");
?>
    <!--Блок интервальный карусели-->
    <div class="container">
        <div class="row">
            <h2 class="titlecaraousle">Самое обсуждаемое</h2>
        </div>

        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="1500">
                    <img src="images/Lec.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2500">
                    <img src="images/ozero.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/Mount.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Предыдущий</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Следующий</span>
            </button>
        </div>
    </div>
    <!--Конец интервальной карусели-->\
    <!--Средний блок главной страницы-->
    <div class="container">
        <div class="container row">
            <div class="main-content col-sm-8">
                <h3>обсуждаемое</h3>
                <div class="new row">
                    <div class="img col-12 col-sm-4">
                        <img src="images/Harry.jpg" class="img-thumbnail" alt="...">
                    </div>
                    <div class="news_text col-12 col-sm-8">
                        <h3>
                            <a href="#">Свежие новости</a>
                        </h3>
                        <i class="las la-user-circle">Создатель</i>
                        <i class="las la-calendar-week">01.01.2023</i>
                        <p class="introduction">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem pariatur
                            iste exercitationem nemo cupiditate illum adipisci quia et accusantium necessitatibus hic,
                            eos, aliquid perspiciatis nostrum dolores earum aliquam architecto? Cumque.</p>
                    </div>
                </div>
            </div>
            <!--боковая информация-->
            <div class="sidebar col-12 col-sm-4">
                <div class="par search">
                    <h3>Исследования материалов</h3>
                    <from action="/" method="post">
                        <input type="text" name="search-team" class="text-input"
                            placeholder="Введите пост который вас интересует">
                    </from>
                </div>
                <div class="par top">
                    <h3>Разделы</h3>
                    <ul>
                        <li><a href="#">1С новости</a></li>
                        <li><a href="#">Разработка</a></li>
                        <li><a href="#">Игры</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--Конец среднего блока-->
<?php
include("application/include/footer.php");
?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
        crossorigin="anonymous"></script>
</body>

</html