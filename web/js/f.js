function error(msg) {
    $("#a").append('<div class="msg">' + msg + '&nbsp;&nbsp;<button id="x" class="btn btn-outline-danger">x</button></div>');
    var m = $('.msg');

    m.fadeIn(300);
    $('.x').click(function () {
        $('.msg').fadeOut();
    });
    $('.msg').click(function () {
        $(this).fadeOut();
    });
}

