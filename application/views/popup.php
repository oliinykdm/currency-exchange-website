<!-- Authorization popup -->
<div class="popup-box" id="popup-box-1">
    <div class="close"><span>X</span></div>
    <div class="bottom js-login-inner">
        <div class="top"><h2>Вход</h2></div>
      <div class="popup-error-message"></div>
        <br />
        <form class="pure-form pure-form-stacked js-login-form">
            <fieldset>
                    <label for="email">Email</label>
                    <input class="pure-input-1" id="email" type="email">
                    <label for="password">Пароль</label>
                    <input class="pure-input-1" id="password" type="password">
                    <p><div class="pure-button pure-button-primary js-login">Войти</div><a href="javascript:void(0);" class="button-error pure-button js-forgot">Забыл пароль</a></p>
            </fieldset>
        </form>
    </div></div>

<!-- Registration popup -->
<div class="popup-box" id="popup-box-2">
    <div class="close"><span>X</span></div>
    <div class="bottom js-register-inner">
        <div class="top"><h2>Регистрация</h2></div>
        <div class="popup-error-message"></div>
        <div class="popup-success-message"></div>
        <br />
        <form class="pure-form pure-form-stacked js-register-form">
            <fieldset>
                <label for="email">Email</label>
                <input class="pure-input-1" id="email" type="email">
                <label for="email">Имя</label>
                <input class="pure-input-1" id="username" type="text">
                <label for="password">Пароль</label>
                <input class="pure-input-1" id="password" type="password">
                <label for="password-confirm">Подтвердите пароль</label>
                <input class="pure-input-1" id="password_complete" type="password">
                <center><p><a href="javascript:void(0);" class="button-xlarge pure-button pure-button-primary js-register">Регистрация</a></p></center>
            </fieldset>
        </form>
    </div>
</div>
<!-- Forgot popup -->
<div class="popup-box" id="popup-box-3">
    <div class="close"><span>X</span></div>
    <div class="bottom js-forgot-inner">
        <div class="top"><h2>Восстановить пароль</h2></div>
        <div class="popup-error-message"></div>
        <div class="popup-success-message"></div>
        <br />
        <form class="pure-form pure-form-stacked js-forgot-form">
            <fieldset>
                <label for="email">Email</label>
                <input class="pure-input-1" id="email" type="email">
                <center><p><a href="javascript:void(0);" class="button-xlarge pure-button pure-button-primary js-forgot-button">Восстановить доступ</a></p></center>
            </fieldset>
        </form>
    </div>
</div>

<div id="blackout"></div>