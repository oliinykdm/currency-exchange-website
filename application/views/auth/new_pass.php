<?=View::factory('header');?>
<div class="area">
    <div class="center-text-500">
        <div class="popup-error-message"></div>
        <div class="popup-success-message"></div>
    <form class="pure-form pure-form-stacked js-change-pass-form">
        <fieldset>
            <label for="password">Новый пароль</label>
            <input class="pure-input-1" id="password" type="password">
            <label for="password-confirm">Подтвердите пароль</label>
            <input class="pure-input-1" id="password_complete" type="password">
            <input id="js-recover-key" type="hidden" value="<?=$key?>">
            <center><p><a href="javascript:void(0);" class="button-xlarge pure-button pure-button-primary js-change-pass">Сохранить пароль</a></p></center>
        </fieldset>
    </form>
    </div>
</div>
<?=View::factory('footer')->set('js', $js);?>