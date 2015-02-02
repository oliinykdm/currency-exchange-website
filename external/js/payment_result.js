function getPaymentStatus(pId) {
    var paymentId = pId;
    $.post("/ajax/getPaymentStatus", {'paymentId': paymentId}, function(data) {
        var response = jQuery.parseJSON(data);
        var result = response;
        if(result.status != 'ok') {
            switch (result.status) {
                case 'bad-paymentId':
                    $('.js-payment-status').text('Ошибка! Некорректный номер платежа');
                    break;
                case 'success':
                    $('.js-payment-status').text('Успешно проведен. Ожидает обработки.');
                    break;
                case 'failure':
                    $('.js-payment-status').text('Ошибка! Платеж не проведен');
                    break;
                case 'wait_secure':
                    $('.js-payment-status').text('На проверке у банка');
                    break;
                case 'wait_accept':
                    $('.js-payment-status').text('Деньги списаны, но магазин еще не прошел проверку');
                    break;
                case 'wait_lc':
                    $('.js-payment-status').text('Деньги списаны, ожидается подтверждение доставки товара');
                    break;
                case 'processing':
                    $('.js-payment-status').text('Обрабатывается банком');
                    break;
                case 'sandbox':
                    $('.js-payment-status').text('Успешно проведен. Ожидает обработки.');
                    break;
                case 'not-paid':
                    $('.js-payment-status').text('Не оплачен');
                    break;
            }
            setTimeout(function(){ getPaymentStatus(pId); }, 3000);
        }
        else
        {

        }
    })
        .fail(function() {
            $('.js-payment-status').text("Ошибка загрузки данных! Попробуйте обновить страницу.");
        })
}
getPaymentStatus(paymentId);

