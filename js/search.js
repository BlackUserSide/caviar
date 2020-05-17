$(document).ready(function () {
    $('.main-form-search-order').submit(function (e) {
        e.preventDefault();
        let numberOreder = $('.main-form-search-order input').val();
        $.ajax({
            method: "POST",
            url: '/search/getDataOrder',
            data: { numberOreder: numberOreder },
            success: function (result) {
                let data = JSON.parse(result);
                if (data.status == 0) {
                    let html = '<p class="err-p-search">ERROR:Some Wrong</p>'
                    if ($('p').is('err-p-search')) {
                        $('.err-p-search').text('ERROR:Some Wrong');
                    } else {
                        $('.error-form-serch').append(html);
                    }
                } else if (data.status == '1') {
                    let html = '<p class="err-p-search">ERROR:Order not foundy</p>'
                    if ($('p').is('err-p-search')) {
                        $('.err-p-search').text('ERROR:Order not foundy');
                    } else {
                        $('.error-form-serch').append(html);
                    }
                } else {
                    $('.load-container-search').css('display', 'block');
                    $('.load-container-search').animate({
                        opacity: '1'
                    })
                    $.each(data, function (index, value) {

                        $('.orderNumber').text(value.orderNumber+" Order number");
                        $('.fullName').text("Full name: "+value.fullName);
                        $('.discount').text("Discount: "+value.discount);
                        $('.total').text("Total price: "+value.total);
                        $('.date').text("Date: "+value.date);
                        if(value.status == 0){
                            $('.status').text('Status: In line');
                        }else if(value.status == 1){
                            $('.status').text('Status: Confirm');
                        } else{
                            $('.status').text('Status: Closed');
                        }

                    })

                }

            }
        })
    })
})