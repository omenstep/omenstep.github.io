<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/style.css"/>

    <title>Title</title>
</head>
<body>

<header>
    <div class="container">
        <div class="col-md-9">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/">
                            <img src="images/logo.png"/>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">Главная</a></li>
                            <li><a href="#">Услуги</a></li>
                            <li><a href="#">Наши работы</a></li>
                            <li><a href="#">О компании</a></li>
                            <li><a href="#">Контакты</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="col-md-3 header_phone">
            <a href="tel:+74950000000">+7 495 000-00-00</a>
        </div>
    </div>
</header>

<div class="container-fluid">
    <div class="row header_bg">
        <div class="container">
            <div class="col-md-6">
                <div class="header_heading">
                    <h1>Ремонт и отделка нежилых помещений в Москве и МО</h1>
                </div>
                <div class="header_icons">
                    <div class="col-md-4 header_icons__item">
                        <img src="images/icons/1.png"/>
                    </div>
                    <div class="col-md-4 header_icons__item">
                        <img src="images/icons/2.png"/>
                    </div>
                    <div class="col-md-4 header_icons__item">
                        <img src="images/icons/3.png"/>
                    </div>
                </div>
            </div>
            <div class="col-md-6 parallax-viewport">
                <img src="images/header-img.png" class="header_img"/>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row callback_form">
        <form>
            <div class="col-md-4 callback_form__image">
                <img src="images/book1.jpg">
            </div>
            <div class="col-md-8">
                <div class="title">
                    Выезд специалиста для
                    обследования и составления
                    сметы на ремонт помещения
                </div>
            </div>
            <div class="col-md-3">
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-user"></i></span>
                    <input type="text" name="name" class="form-control" placeholder="Имя" aria-describedby="sizing-addon1">
                </div>
            </div>
            <div class="col-md-3">
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-phone"></i></span>
                    <input type="text" name="phone" class="form-control" placeholder="Телефон" aria-describedby="sizing-addon1">
                </div>
            </div>
            <div class="col-md-1">
                <div class="input-group input-group-lg">
                    <button type="button" class="btn btn-default btn-lg">
                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Отправить
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="js/jquery.parallax.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>