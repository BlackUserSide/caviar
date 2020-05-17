jQuery(document).ready(function () {
    

    $('.content-rewiews').slick({
        
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear'
    });
    $('.hamburger').click(function () {
        $(this).toggleClass('is-active');
        if($(this).hasClass('is-active')){
            $('.nav-xs-wrapper').css('display', 'block');
            $('body').css('top', '200px');
            $('.nav-xs-wrapper').animate({
                opacity: '1',
                top: '0',
            }, 500);
        }else {
            $('.nav-xs-wrapper').animate({
                opacity: '0',
                top: '-400px',
            }, 500)
            $('body').css('top', '0');
            $('.nav-xs-wrapper').css('display', 'none');
        }
    })
    $('.btn-addcart').click(function(e){
        e.preventDefault();
        var id = $(this).attr('id');
        
        $.ajax({
            type: 'POST',
            url: '/cart/addCart',
            data: {id_tov: id, },
            success: function(data){
                
            } 
        })
    });
    $('.close-hidden-form-callback').click(function(e){
        e.preventDefault();
        $('.footer-hidden-form').css('display', 'none');
        
    })
    $('.callback-link').click(function(e){
        e.preventDefault();
        $('.footer-hidden-form').css('display', 'block');
    })
    $('.hidden-contact').submit(function(e){
        e.preventDefault();
        let name = $('.name-input-callback').val();
        let phone = $('.phone-input-callback').val();
        $.ajax({
            method: 'POST',
            url: '/letCallback',
            data: {name: name, phone: phone},
            success: function(result){
                console.log(result);
                $('.hidden-contact').css('display', 'none');
                $('.succes-massege').css('display', 'inline-block');
                $('.succes-massege').css('color', '#fff');
                setTimeout(function(){
                    $('.footer-hidden-form').css('display', 'none');
                }, 1000)

            }
        })
    })
    
    
});
$(window).on('load', function () {
    $('.pre-loader').delay(500).fadeOut('slow');
    
    
    setInterval(function(){
        $.ajax({
            url: '/mainadmin/checkOrder',
            success: function(result){
                $('#span_count_orders').text(result);
            }
            
        })
    } ,3000);
});
