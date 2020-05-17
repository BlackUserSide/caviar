jQuery(document).ready(function () {
    $('#changeStatus').click(function () {
        $('.bg-lock').css('display', 'block');
        $('.wrapper-drop-close').css('display', 'block');
        $('.wrapper-drop-close').animate({
            opacity: '1'
        }, 500);
    })
    $('#form-change-status').submit(function (e) {
        e.preventDefault();
        var val = $('.changeStatuSelect').val();
        $.ajax({
            url: '/orderspage/changeStatus',
            type: 'POST',
            data: { status: val },
            success: function (result) {
                $('.bg-lock').css('display', 'none');
                $('.wrapper-drop-close').css('display', 'none');
                $('.wrapper-drop-close').animate({
                    opacity: '0'
                }, 500);
                alart(1);
            }

        })
    })

});