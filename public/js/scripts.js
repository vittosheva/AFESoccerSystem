/*
* LOGIN & REGISTER
* */
$(function () {
    $('.navbar-toggle-sidebar').click(function () {
        $('.navbar-nav').toggleClass('slide-in');
        $('.side-body').toggleClass('body-slide-in');
        $('#search').removeClass('in').addClass('collapse').slideUp(200);
    });

    $('#search-trigger').click(function () {
        $('.navbar-nav').removeClass('slide-in');
        $('.side-body').removeClass('body-slide-in');
        $('.search-input').focus();
    });
});


/*
 * FORMS
 * */
$(function () {
    $('#characterLeft').text('150 caracteres restantes.');
    $('#message').keydown(function () {
        var max = 150;
        var len = $(this).val().length;
        if (len >= max) {
            $('#characterLeft').text('Ha llegado al limite de caracteres.');
            $('#characterLeft').addClass('red');
            $('#btnSubmit').addClass('disabled');
        }
        else {
            var ch = max - len;
            $('#characterLeft').text(ch + ' caracteres restantes.');
            $('#btnSubmit').removeClass('disabled');
            $('#characterLeft').removeClass('red');
        }
    });

    $('#characterLeft2').text('100 caracteres restantes.');
    $('#message2').keydown(function () {
        var max = 100;
        var len = $(this).val().length;
        if (len >= max) {
            $('#characterLeft2').text('Ha llegado al limite de caracteres.');
            $('#characterLeft2').addClass('red');
            $('#btnSubmit').addClass('disabled');
        }
        else {
            var ch = max - len;
            $('#characterLeft2').text(ch + ' caracteres restantes.');
            $('#btnSubmit').removeClass('disabled');
            $('#characterLeft2').removeClass('red');
        }
    });
});


/*
 * MESSAGES
 * */
$(function () {
    // Hide alert success after 5 seg
    window.setTimeout(function () {
        $(".alert-success").fadeTo(500, 0).slideUp(500, function () {
            $(this).remove();
        });
    }, 5000);

    $('.combobox').combobox();
});

