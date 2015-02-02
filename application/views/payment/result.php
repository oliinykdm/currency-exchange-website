<?=View::factory('header');?>
<script>
    var paymentId = <?=$paymentId?>;
</script>
    <div class="area">
        <div class="center-text-full exchange-process">
            <div class="left-block">
                <div class="item">Ввод личных данных</div>
                <div class="item">Подтверждение перевода</div>
                <div class="item">Статус операции и бонусы<div class="active"></div></div>
            </div>
            <div class="right-block">
                <div class="bigblock">Статус платежа</div>
                 <b><div class="js-payment-status">неизвестен</div></b>
                </div>
            </div>
        </div>
<?=View::factory('footer')->set('js', $js);?>