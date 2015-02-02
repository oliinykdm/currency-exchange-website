<?=View::factory('header');?>
<header>
    <div class="content-block">
    <h2>Направления обмена</h2>
        <div class="js-form">
        <div class="left">
            <div class="js-from">
        </div>
        </div>
        <div class="right">
            <div class="js-to">
        </div>
        </div>

            <h2>Данные обмена</h2>
            <h3>Вы заплатите: <span id="pay">0</span> <span id="pay_curr"></span>. Вы получите: <span id="get">0</span> <span id="get_curr"></span></h3>
            <div class="js-submit-form">
            <form id="js-submit-form" action="/change" method="POST">
                <p>Номер <span class="payment_method_desc_from"></span>
                <p><input type="text" name="payment_details_from" /></p></p>
                <p>Номер <span class="payment_method_desc_to"></span>
                <p><input type="text" name="payment_details_to" /></p></p>
                <input type="hidden" name="pay" value="" />
                <input type="hidden" name="pay_curr" value="" />
                <input type="hidden" name="get" value="" />
                <input type="hidden" name="get_curr" value="" />
                <p><button class="pure-button pure-button-primary">Совершить обмен</button></p>
            </form>
                </div>
    </div>
</header>
<script type="text/javascript" src="/external/js/common.js"></script>
<?=View::factory('footer');?>