<div class="footer">
    <div class="logo"></div>
    <div class="support">Поддержка: <br />support@wmzobmen.com</div>
    <div class="footer-menu">
        <div class="items">
            <a href="#" class="item">Контакты</a>
            <a href="#" class="item">Новости</a>
            <a href="#" class="item">О нас</a>
            <a href="#" class="item">Соглашение</a>
            <a href="#" class="item">Курсы обмена</a>
            <a href="#" class="item">Партнерская программа</a>
        </div>
    </div>
    <div class="accept-webmoney">
        <div class="items">
            <div class="item"><div class="wm"></div>Принимаем Webmoney</div>
            <div class="item"><div class="wm"></div>Принимаем Webmoney</div>
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
</div>
<?
if(isset($js)) :
foreach($js as $file) :
?><script type='text/javascript' src='/external/js/<?=$file?>'></script>
<?
endforeach;
endif;
?>
</body>
</html>