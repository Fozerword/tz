<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/ful.css">  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Caption:wght@400;700&display=swap" rel="stylesheet">   
    <link rel="stylesheet" href="css/font.css">
    <script src="js/bootstrap.js"></script>
    <title>LOGO</title>
</head>
<body>
    <!--Шапка-->
    <header class="headnav">
        <div class="blocknav">
            <div class="container-md">
                <div class="navheader">
                    <div class="nav_burger">
                        <span></span>
                    </div>
                    <img src="img/png/LOGO.png" alt="LOGO">
                    <p class="address">Ростов-на-Дону<br><span>ул. Ленина, 2Б</span></p>
                    <h6 class="Whatsapp">+7(863) 000 00 00</h6>
                    <button class="formbtn">Записаться на прием</button>
                </div>
            </div>
        </div>
        <div class="navigation" id="nav">
            <div class="container-md">
                <nav class="navigation">
                    <ul class="nav">
                        <li><a href="">О клинике</a></li>
                        <li><a href="">Услуги</a></li>
                        <li><a href="">Специалисты</a></li>
                        <li><a href="">Цены</a></li>
                        <li><a href="">Контакты</a></li>
                    </ul>
                    <button class="formbtn none" id="btn">Записаться на прием</button>
                </nav>
            </div>
        </div>
    </header>
<!-----------------------------------Контент--------------------------------------------->
    <div class="background-f">
        <div class="container-md">
            <div class="row content-1">
                <div class="col-12 col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <h2>Многопрофильная клиника для детей и взрослых</h2>
                    <h6 class="m-top">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua
                    </h6>
                </div>
            </div>
        </div>
    </div>
    <div class="container-md">
        <div class="row">
            <div class="col-12">
                <div class="slider">
                    <div class="heder-slider">
                        <div class="content">
                            <h1>Check-UP</h1>
                            <h4>для мужчин</h4>
                            <ul>
                                <li><span>Гормональный скрининг</span></li>
                                <li><span>Тестостерон</span></li>
                                <li><span>Свободный тестостерон</span></li>
                                <li><span>Глобулин, связывающий половые гормоны</span></li>
                            </ul>
                                <h5>Всего 2800₽<span> <s>3500₽</s></span></h5>
                                <button class="formbtn">Записаться</button>
                                <button class="formbtn invert">Подробнее</button>
                        </div>
                    </div>
                    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <?php
                            $i=0;
                            require_once"connectbd.php";
                            while(!empty($myrow = $photos -> fetch_array()))
                            {
                                if($i==0){
                                    echo "<div class=\"carousel-item active\" id='$i' data-bs-interval=\"10000\">
                                <img src='$myrow[0]' class=\"item-carusel\" alt=\"...\">
                                </div>";
                                }
                                else{
                                    echo "<div class=\"carousel-item\" id='$i' data-bs-interval=\"10000\">
                                <img src='$myrow[0]' class=\"item-carusel\" alt=\"...\">
                                </div>";
                                }
                                $i++;
                            }
                            ?>
                        </div>
                    </div>
                    <div class="carusel-indicators">
                        <?php
                            for($j = 1; $j < $i+1; $j++)
                            {
                                if($j==1)
                                    echo "<h6 id=\"current\" class='active'>". $j ."</h6>";
                                else
                                    echo "<h6 id=\"current\">". $j ."</h6>";
                            }
                            echo "<h6>/$i</h6>";
                        ?>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container-md">
            <div class="row footer">
                <div class="col-3 col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2">
                    <img src="img/png/LOGO_white.png" alt="..logo">
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-7 col-md-6 col-sm-5 col-6 offset-xxl-1 offset-xl-1 offset-lg-0 offset-sm-1 offset-md-1  offset-3">
                    <ul class="nav footer">
                        <li><a href="">О клинике</a></li>
                        <li><a href="">Услуги</a></li>
                        <li><a href="">Специалисты</a></li>
                        <li><a href="">Цены</a></li>
                        <li><a href="">Контакты</a></li>
                    </ul>
                </div>
                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-4 offset-4 offset-xxl-1 offset-xl-0 " id="social" >
                    <a href="" class="social"><img src="img/svg/instagram.svg" alt="instagramm"></a>
                    <a href="" class="social"><img src="img/svg/Whatsapp.svg" alt="Whatsapp"></a>
                    <a href="" class="social"><img src="img/svg/telegram.svg" alt="telegram"></a>
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="js/menu.js"></script>
</html>