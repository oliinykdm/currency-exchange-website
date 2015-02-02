var form = $('.js-form');
var from = form.find('.js-from');
var to = form.find('.js-to');

var from_currency = 'wmz';
var to_currency = 'uah';

var correctData = false;

var values_display = null;
var currencies = {
    wmz: 'WMZ',
    wmr: 'WMR',
    wmu: 'WMU',
    wme: 'WME',
    uah: 'Приват24 UAH'
};

var currencies_data = {
    wmr: {
        wmz: null,
        wmu: null,
        wme: null,
        uah: null,
    },

    wmz: {
        wmr: null,
        wmu: null,
        wme: null,
        uah: null,
    },
    wmu: {
        wmr: null,
        wmz: null,
        wme: null,
        uah: null,
    },
    wme: {
        wmr: null,
        wmz: null,
        wmu: null,
        uah: null,
    },
    uah: {
        wmr: null,
        wmz: null,
        wme: null,
        wmu: null,
    }
};
function updateRates() {
    $.post("/ajax/getRates", function(data) {
        var response = jQuery.parseJSON(data);
        var result = response;
        $.each(result, function (key, value) {
            $.each(value, function (key_inner, value_inner) {
            currencies_data[key][key_inner] = value_inner;
            });
        });
        init();
    })
        .fail(function() {
            alert("Ошибка загрузки данных! Зайдите, пожалуйста, позже.");
        })
}

updateRates();


function updateData() {
    var payval = from.find('*[data-value=' + from_currency + ']').find('.value-data').val();
    var getval = to.find('*[data-value=' + to_currency + ']').find('.value-data').val();
    if(payval.length) {
        $('#pay').text(payval);
        $('#pay_curr').text(from_currency.toUpperCase());
     }
    else
    {

        $('#pay').text('0');
        $('#pay_curr').text('');
    }

    if(getval) {
        $('#get').text(getval);
        $('#get_curr').text(to_currency.toUpperCase());
    }
    else
    {

        $('#get').text('0');
        $('#get_curr').text('');
    }

    $('input[name=pay]').val(payval);
    $('input[name=pay_curr]').val(from_currency);
    $('input[name=get]').val(getval);
    $('input[name=get_curr]').val(to_currency);

    if(payval && getval) {
        correctData = true;
    }
    else

    {
        correctData = false;
    }
    if(correctData) {

        $('.js-submit-form').show();
        switch(from_currency) {
            case 'uah':
                $('.payment_method_desc_from').text(' карты ПБ');
                $('input[name=payment_details_from]').attr('placeholder', 'Пример: 1234567890123456');
                break;
            default:
                $('.payment_method_desc_from').text(from_currency.toUpperCase() + '-кошелька');
                $('input[name=payment_details_from]').attr('placeholder', 'Пример: '+ from_currency.substr(from_currency.length - 1).toUpperCase() +'123456789012');
        }

        switch(to_currency) {
            case 'uah':
                $('.payment_method_desc_to').text(' карты ПБ');
                $('input[name=payment_details_to]').attr('placeholder', 'Пример: 1234567890123456');

                break;
            default:
                $('input[name=payment_details_to]').attr('placeholder', 'Пример: '+ to_currency.substr(to_currency.length - 1).toUpperCase() +'123456789012');
                $('.payment_method_desc_to').text(to_currency.toUpperCase() + '-кошелька');
        }
    }
    else

    {
        $('.js-submit-form').hide();
    }


}


function init() {
    $.each(currencies, function (key, value) {
        $(from).append('<div class="item-select" data-value="' + key + '">' +
        '<input type="text" class="value-data" />' +
        '<div class="item"><div class="' + key + '"></div>' +
        '<div class="desc">' + value + '</div></div></div>');
    });
    $(from).find('*[data-value=' + from_currency + ']').first().addClass('selected');
    display_currencies(to, from_currency);
    $(to).find('*[data-value=' + to_currency + ']').first().addClass('selected');
}

function display_currencies(element, currency) {
    values_display = currencies;
    to_currency = null;
    $(element).html('');
        $.each(values_display, function (key, value) {
           if(key !== currency) {
               $(element).append('<div class="item-select" data-value="' + key + '">' +
               '<input type="text" class="value-data" /><div class="item">' +
               '<div class="' + key + '"></div>' +
               '<div class="desc">' + value + '</div></div>');
           }
        });
}

function changed_from(_this_) {
    to_get = 0;
    from.find('.item-select').removeClass('selected');
    _this_.addClass('selected');
    from_currency = _this_.data('value');
    display_currencies(to, from_currency);
    $(from).find('*[data-value=' + from_currency + ']').find('.value-data').trigger('change');
}
function changed_to(_this_) {
    to.find('.item-select').removeClass('selected');
    _this_.addClass('selected');
    to_currency = _this_.data('value');
}

from.find('.value-data').live("change paste keyup", function(e) {
    var val = $(this).val();
    $(this).numeric();
    $.each(to.find('.item-select'), function (key, value) {
        var toVal = $(this).data('value');
        $(this).find('.value-data').val(wacky_round(val * currencies_data[from_currency][toVal], 3));
    });
});

to.find('.value-data').live("keyup", function(e) {
    var val = $(this).val();
    $(this).numeric();
    $(from).find('*[data-value=' + from_currency + ']').find('.value-data').val(wacky_round(val * currencies_data[to_currency][from_currency], 2));
});

to.find('.value-data').live("change click", function(e) {
    $(from).find('*[data-value=' + from_currency + ']').find('.value-data').trigger('change');
});


to.find('.value-data').live('select', function() {
    $(this).closest('.item-select').click();
});

from.find('.value-data').live('select', function() {
    $(this).closest('.item-select').click();
});

from.find('.item-select').live('click',function () {
    changed_from($(this));
});
to.find('.item-select').live('click', function () {
    changed_to($(this));
});


function wacky_round(number, places) {
    var multiplier = Math.pow(10, places+2);
    var fixed = Math.floor(number*multiplier);
    fixed += 44;
    fixed = Math.floor(fixed/100);
    return fixed/Math.pow(10, places);
}


from.find('.item-select, .selected').find('.value-data').live("keyup change click", function(e) {
    updateData();
});
to.find('.item-select, .selected').find('.value-data').live("keyup change click", function(e) {
    updateData();
});

$('#js-submit-form').submit(function(e) {

    if($('input[name=payment_details_from]').val() == '' || $('input[name=payment_details_to]').val() == '') {

        alert('Ошибка! Проверьте корректность заполнения формы!');
        e.preventDefault();
        e.stopPropagation();
    }


});



