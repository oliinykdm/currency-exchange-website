var fromForm = $('.js-from');
var toForm = $('.js-to');

var fromCurrency = 'wmz';
var fromAmount = 1;
var toCurrency = '';
calcExchangeValues();

function updateFields() {
    $('input[name=payAmount]').val(fromAmount);
    $('input[name=payCurrency]').val(fromCurrency);
    $('input[name=getCurrency]').val(toCurrency);
}

fromForm.find('[data-currency=' + fromCurrency.toLowerCase() +']').addClass('active');
function calcExchangeValues() {
    $.post("/ajax/initCalcExchangeValues", { 'fromCurrency': fromCurrency, 'amount': fromAmount}, function(data) {
        var response = jQuery.parseJSON(data);
        var result = response;
            if (typeof result !== 'undefined') {
                var i = 1;
                $('.js-rate-from').html('1 ' + '<b>' + fromCurrency.toUpperCase() + '</b>');
                $('.js-rate-to').html(result.rate + ' <b>' + result.rateName.toUpperCase() + '</b>');
                if(result.type == 'webmoney') {
                    $('.js-checkout-desc').text('(с учетом комиссии Webmoney 0.8%)');
                }
                if(result.type == 'privat24') {
                    $('.js-checkout-desc').text('');
                }
                $('.js-checkout-sum').html(result.toPay + ' <b>' + fromCurrency.toUpperCase() + '</b>');
                $.each(result[fromCurrency.toLowerCase()], function( index, value ) {
                        var itemFind =  toForm.find('#i' + i + '');
                        itemFind.attr('data-currency', index);
                        itemFind.find('.value').text(value);
                        itemFind.find('.name').text(index.toUpperCase());
                    i++;
                 });
                updateFields();
                toForm.find('.active').click();
            }
    })
        .fail(function() {
            $('.js-register').removeClass('pure-button-disabled');
            alert("Случилась ошибка, обратитесь к администратору");
        })

}

fromForm.find('.items .item .value input').live("keyup", function() {
    fromAmount = $(this).val();
    calcExchangeValues();
});

fromForm.find('.items .item .value input').live( "focusin", function() {
    $(this).numeric();
    fromForm.find('.items .item').removeClass('active');
    var item = $(this).closest('.item');
    fromCurrency = item.attr('data-currency');
    item.addClass('active');
    fromAmount = $(this).val();
    calcExchangeValues();

});

fromForm.find('.items .item').live( "click", function() {
    $(this).find('.value input').focus();
});

toForm.find('.items .item').live( "click", function() {
    toForm.find('.items .item').removeClass('active');
    toCurrency = $(this).attr('data-currency');
    $(this).addClass('active');
    updateFields();
});

$('.exchange-button').click(function() {
   if(fromCurrency == '') {
       alert('Выберите, пожалуйста, валюту для обмена');
   }
    else if(fromAmount == '') {
        alert('Введите, пожалуйста, сумму обмена');
    }
   else if(toCurrency == '') {
       alert('Выберите, пожалуйста, валюту и сумму получения');
   }
    else {
       $('#js-submit-form').submit();
   }
});
