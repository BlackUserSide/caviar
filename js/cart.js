jQuery(document).ready(function () {

    $('.count-input').change(function(){
        var col = $(this).val();
        if(col < 1){
            col = 1;
            $(this).val(1);
        }
        var id = $(this).attr('id');
        $.ajax({
            type: 'POST',
            url: '/cart/changeCol',
            data: {id: id, col: col},
            success: function() {
                location.reload();
                
            }
        });
        
    });
    $('.delete-item').click(function(){
        var id = $(this).attr('id');
        $.ajax({
            type: 'POST',
            url: '/cart/delectProduct',
            data: {idDel: id},
            success: function(data){
                location.reload();
            }
        })
    })
    var sum = 0;
    $('.price').each(function(){
        sum += parseInt($(this).html());
    })
    $('.total-info').text(sum);
    var summ = 0;
    $('.count-input').each(function(){
        summ += parseInt($(this).val());
    })
    $('.col-info').text(summ);
    
    var discount = 0;
    $('.discount-sum').each(function(){
        discount += parseInt($(this).html())
    })
    $('#discontPrice').val(discount);
    $('#allPrice').val(sum);
    
    $('.btn-order').click(function(){
        $('.hidden-resurse-order').css('display', 'block');
        $('.hidden-resurse-order').animate({
            opacity: '1'
        }, 450);
    })
    // $('.form-order-wrapper').submit(function(e){
    //     e.preventDefault(); 
    //     var $form = $(this);
        
    //     $.ajax({
    //         type: 'POST',
    //         url: '/cart/startOrder',
            
    //         data: $form.serialize(),
            
    //     }).done(function(){
    //         console.log('success');
    //         console.log($form.serialize());
    //         $('.hidden-resurse-order').css('display', 'none');
    //     }).fail(function(){
    //         console.log('fail');
    //     });
       
    // });
});