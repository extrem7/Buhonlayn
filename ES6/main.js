function menu() {
    if (screen.width > 768) {
        $(window).scroll(function () {
            if ($(".sidebar").hasClass('open')) {
                $(".sidebar").removeClass('open');
            }
        });
        $(window).click(function (e) {
            const container = $(".sidebar");
            if (!container.is(e.target) && container.has(e.target).length === 0 && !$(e.target).is('.toggle-btn, .icon-bar')) {
                $(".sidebar").removeClass('open');
            }
        });
    }
    $('.toggle-btn,.icon-bar').click(function () {
        $(".sidebar").addClass('open');
        if (screen.width < 768) {
            $('body').addClass('stop');
        }
    });
    $('.sidebar .close-menu').click(function (e) {
        e.preventDefault();
        $(".sidebar").removeClass('open');
        $('body').removeClass('stop');
    });
}

function also() {
    if (screen.width < 768) {
        $('.also li:nth-child(n+8)').hide();
        $('.also .button').click(function (e) {
            e.preventDefault();
            $('.also li:nth-child(n+8)').fadeIn();
            $(this).fadeOut();
        })
    }
}

function dropdown() {
    if (screen.width > 768){
    $('.dropdown-menu').mouseenter(function () {
        $(this).parent('li').find('.drop-open').addClass('hover');
    }).mouseleave(function () {
        $(this).parent('li').find('.drop-open').removeClass('hover');
    })}
}

$(function () {
    $(".scroll-link").click(function (event) {
        event.preventDefault();
        let target = $(this).attr('href'),
            top = $(target).offset().top;
        $('body,html').animate({scrollTop: top}, Math.abs(top - $(document).scrollTop()) / 1.5);
    });
    $('form').submit(function (e) {
        e.preventDefault();
        let data = $(this).serializeArray();
        $.ajax({
            method: 'POST',
            url: '/sendMail.php',
            data: data,
            success: function (data) {
                console.log(data);
                $('#thanks').modal('show');
                $('#call-back').modal('hide');
                $('form input:not(.hidden,[type=submit])').val('');
                setTimeout(function () {
                    $('#thanks').modal('hide');
                }, 3000)
            }
        })
    });
    menu();
    also();
    dropdown();
});