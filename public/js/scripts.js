/**
 * MESSAGES
 */
$(function () {
    // Hide alert success after 5 seg
    window.setTimeout(function () {
        $(".alert").fadeTo(500, 0).slideUp(500, function () {
            $(this).remove();
        });
    }, 5000);

    $('.combobox').combobox();
});

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
});
