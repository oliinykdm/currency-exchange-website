<?=View::factory('admin/header');?>
<form id="js-login-form" class="pure-form pure-form-stacked login-form" method="POST" action="">
    <fieldset>
        <legend>Админ-центр</legend>
        <?if(isset($error)):?><p style="color: red;font-weight: bold"><?=$error?></p><?endif;?>
        <label for="email">Почта</label>
        <input name="email" id="email" type="email" placeholder="Почта">
        <label for="password">Пароль</label>
        <input name="password" id="password" type="password" placeholder="Пароль">
        <p><button type="submit" class="pure-button pure-button-primary">Вход</button></p>
    </fieldset>
</form>
<script type="text/javascript" src="/external/lib/js/jquery.min.js"></script>
<?if(!empty($js)):?>
    <script type="text/javascript">
        $(document).ready(function() {
            <?=$js?>
        });
    </script>
<?endif;?>
</body>
</html>
