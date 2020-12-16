$('window').ready(() => {
    $('.form-control').bind('mouseenter', function () {
        $(this).parent().addClass('focused-effect');
    });

    $('.form-control').focus(function () {
        $(this).prev().addClass('focused-effect');
    });

    $('.form-control').bind('mouseleave blur', function () {
        if (!$(this).is(':focus'))
            $(this).parent().removeClass('focused-effect');
    });

    $('.form-control').blur(function () {
        if ($(this).val().length == 0)
            $(this).prev().removeClass('focused-effect');
    });
});