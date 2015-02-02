var registerForm = $('.js-register-form');
var loginForm = $('.js-login-form');
var forgotForm = $('.js-forgot-form');
var changePassForm = $('.js-change-pass-form');

$('.js-login').click(function() {
    $(this).addClass('pure-button-disabled');
    var email = loginForm.find('#email').val();
    var password = loginForm.find('#password').val();
    $.post("/ajax/initLogin", { 'email': email, 'password': password}, function(data) {
        var response = jQuery.parseJSON(data);
        var result = response;
        if (typeof result.error !== 'undefined') {
            $('.js-login-inner .popup-error-message').text(result.error).fadeIn('fast');
            $('.js-login').removeClass('pure-button-disabled');
        }
        else {
            if (typeof result.success !== 'undefined') {
                location.reload();
            }
        }
    })
        .fail(function() {
            $('.js-login').removeClass('pure-button-disabled');
            alert("Случилась ошибка, обратитесь к администратору");
        })
});
$('.js-forgot-button').click(function() {
    $(this).addClass('pure-button-disabled');
    var email = forgotForm.find('#email').val();
    $.post("/ajax/initForgot", { 'email': email}, function(data) {
        var response = jQuery.parseJSON(data);
        var result = response;
        if (typeof result.error !== 'undefined') {
            $('.js-forgot-inner .popup-error-message').text(result.error).fadeIn('fast');
            $('.js-forgot-button').removeClass('pure-button-disabled');
        }
        else {
            if (typeof result.success !== 'undefined') {
                forgotForm.hide();
                $('.js-forgot-inner .popup-error-message').hide();
                $('.js-forgot-inner .popup-success-message').text(result.success).fadeIn('fast');
                setTimeout( function() {
                    closeDialog();
                    $('.js-forgot-button').removeClass('pure-button-disabled');
                    forgotForm.find('#email').val('');
                    forgotForm.show();
                    $('.js-forgot-inner .popup-error-message').text('').hide();
                    $('.js-forgot-inner .popup-success-message').text('').hide();
                } , 4000);
            }
        }
    })
        .fail(function() {
            $('.js-forgot-button').removeClass('pure-button-disabled');
            alert("Случилась ошибка, обратитесь к администратору");
        })
});
$('.js-change-pass').click(function() {
    $(this).addClass('pure-button-disabled');
    var password = changePassForm.find('#password').val();
    var password_complete =changePassForm.find('#password_complete').val();
    var key = changePassForm.find('#js-recover-key').val();
    $.post("/ajax/initChangePass", {'password': password, 'password_complete': password_complete, 'key': key}, function(data) {
        var response = jQuery.parseJSON(data);
        var result = response;
        if (typeof result.error !== 'undefined') {
            $('.popup-error-message').text(result.error).fadeIn('fast');
            $('.js-change-pass').removeClass('pure-button-disabled');
        }
        else {
            if (typeof result.success !== 'undefined') {
                changePassForm.hide();
                $('.popup-error-message').hide();
                $('.popup-success-message').text(result.success).fadeIn('fast');
                setTimeout( function() {
                    window.location.replace('/');
                } , 3000);
            }
        }
    })
        .fail(function() {
            $('.js-forgot-button').removeClass('pure-button-disabled');
            alert("Случилась ошибка, обратитесь к администратору");
        })
});
$('.js-logout').click(function() {
    $.post("/ajax/initLogout", function(data) {
        var response = jQuery.parseJSON(data);
        var result = response;
        if (typeof result.error !== 'undefined') {
            alert("Случилась ошибка, обратитесь к администратору");
        }
        else {
            if (typeof result.success !== 'undefined') {
                location.reload();
            }
        }
    })
        .fail(function() {
            alert("Случилась ошибка, обратитесь к администратору");
        })
});
$('.js-forgot').click(function() {
    toForgot();
});

$('.js-register').click(function() {
    $(this).addClass('pure-button-disabled');
    var email = registerForm.find('#email').val();
    var username = registerForm.find('#username').val();
    var password = registerForm.find('#password').val();
    var password_complete = registerForm.find('#password_complete').val();
    $.post("/ajax/initRegister", { 'email': email, 'username': username, 'password': password, 'password_complete': password_complete}, function(data) {
        var response = jQuery.parseJSON(data);
        var result = response;
        if (typeof result.error !== 'undefined') {
            $('.js-register-inner .popup-error-message').text(result.error).fadeIn('fast');
            $('.js-register').removeClass('pure-button-disabled');
        }
        else {
            if (typeof result.success !== 'undefined') {
                registerForm.hide();
                $('.js-register-inner .popup-error-message').hide();
                $('.js-register-inner .popup-success-message').text(result.success).fadeIn('fast');
                registerForm.find('#email').val('');
                registerForm.find('#username').val('');
                registerForm.find('#password').val('');
                registerForm.find('#password_complete').val('');
                setTimeout( function() { closeDialog(); } , 4000);
            }
        }
    })
        .fail(function() {
            $('.js-register').removeClass('pure-button-disabled');
            alert("Случилась ошибка, обратитесь к администратору");
        })
});


var boxWidth = 400;

function centerBox() {
    var winWidth = $(window).width();
    var winHeight = $(document).height();
    var scrollPos = $(window).scrollTop();
    var disWidth = (winWidth - boxWidth) / 2;
    var disHeight = scrollPos + 150;
    $('.popup-box').css({'width' : boxWidth+'px', 'left' : disWidth+'px', 'top' : disHeight+'px'});
    $('#blackout').css({'width' : winWidth+'px', 'height' : winHeight+'px'});
    return false;
}

$(window).resize(centerBox);
$(window).scroll(centerBox);
centerBox();
$('[class*=popup-link]').click(function(e) {
    e.preventDefault();
    e.stopPropagation();
    var name = $(this).attr('class');
    var id = name[name.length - 1];
    var scrollPos = $(window).scrollTop();
    $('#popup-box-'+id).show();
    $('#blackout').show();
    $('html').scrollTop(scrollPos);
});
$('[class*=popup-box-]').click(function(e) {
    e.stopPropagation();
});
$('html').click(function() {
    //  var scrollPos = $(window).scrollTop();
    //   $('[id^=popup-box-]').hide();
    // $('#blackout').hide();
    //  $('html').scrollTop(scrollPos);
});
$('.close').click(function() {
    closeDialog();
});

function closeDialog() {
    var scrollPos = $(window).scrollTop();
    $('[id^=popup-box-]').hide();
    $('#blackout').hide();
    $('html').scrollTop(scrollPos);
}

function toForgot() {
    var scrollPos = $(window).scrollTop();
    $('[id^=popup-box-]').hide();
    $('#blackout').hide();
    $('html').scrollTop(scrollPos);
    $('#popup-box-3').show();
    $('#blackout').show();
    $('html').scrollTop(scrollPos);
}

