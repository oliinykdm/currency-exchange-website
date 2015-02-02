<!DOCTYPE html>
<html>
<head>
    <title>Обменник</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="Description" content="Обменник" />
    <meta name="viewport" content="initial-scale=1.0,width=device-width" />
    <script type="text/javascript" src="/external/lib/js/jquery.min.js"></script>
    <script type="text/javascript" src="/external/lib/js/jquery.numeric.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300italic,300&subset=cyrillic-ext,latin' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
    <link rel="stylesheet" href="/external/css/style.css" type="text/css" />
</head>
<body>
<?=View::factory('popup');?>
<div class="top-menu">
    <div class="inner">
        <div class="left">
            <a href="#" class="item">Обмен</a>
            <a href="#" class="item">FAQ</a>
            <a href="#" class="item">О нас</a>
            <a href="#" class="item">Контакты</a>
            <a href="#" class="item">Новости</a>
            <a href="#" class="item">Партнерская программа</a>
        </div>
        <div class="right">
            <?if(Auth::getInstance()->isLogged()):?>
                <b><?=Auth::getInstance()->getCurrentUser()->getUsername();?></b> | Профиль | <a href="javascript:void(0);" class="js-logout">Выход</a>
            <?else:?>
                <a href="javascript:void(0);" class="item-right"><div class="login"></div><span class="popup-link-1">Вход</span></a>
                <a href="javascript:void(0);" class="item-right"><div class="register"></div><span class="popup-link-2">Регистрация</span></a>
            <?endif;?>
        </div>
    </div>
</div>
<div class="header-block">
    <div class="inner">
        <a href="/" class="logo"></a>
        <div class="speed-contacts">
            <div class="item">
                <div class="skype"></div><span>skype-login</span>
            </div>
            <div class="item">
                <div class="icq"></div><span>123-456-789</span>
            </div>
            <div class="item">
                <div class="phone"></div><span>+380 (00) 000-00-00</span>
            </div>
        </div>
        <div class="social">
            <span>Мы в социальных сетях:</span>
            <div class="social-icons">
                <div class="item"><a href="#" class="fb"></a></div>
                <div class="item"><a href="#" class="vk"></a></div>
                <div class="item"><a href="#" class="gp"></a></div>
                <div class="item"><a href="#" class="ok"></a></div>
            </div>
        </div>
        <div class="block">
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
            eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
            sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est
        </div>
    </div>
</div>