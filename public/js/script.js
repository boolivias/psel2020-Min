$('window').ready(() => {
    // Ativa o efeito do label para inputs que renderizam com valores
    $('.form-control').each(function (i, element) {
        if ($(element).val().length > 0)
            $(this).prev().addClass('focused-effect');
    })

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

    $('*[data-event="enableEdit"]').click(function () {
        $('.form-control').each(function (i, element) {
            $(element).removeAttr('readonly');
        });

        $('.invisible').each(function (i, element) {
            $(element).removeClass('invisible');
            $(element).addClass('visible');
        });

        $(this).addClass('invisible');
    });

    $('*[data-event="disableEdit"]').click(function () {
        $('.form-control').each(function (i, element) {
            $(element).attr('readonly');
        });

        var invisibles = $('.invisible');

        $('.visible').each(function (i, element) {
            $(element).removeClass('visible');
            $(element).addClass('invisible');
        });

        invisibles.each(function (i, element) {
            $(element).removeClass('invisible');
            $(element).addClass('visible');
        })

        $(this).addClass('invisible');
    });

    $('*[data-event="openWidget"]').click(function () {
        $($('.widget-lateral')[0]).addClass('widget-lateral-open');
    });

    $('*[data-event="closeWidget"]').click(function () {
        $($('.widget-lateral-open')[0]).removeClass('widget-lateral-open');
    });

    $('.nav-item').click(function () {
        $($('.active')[0]).removeClass('active');

        $(this).addClass('active');
    })
});