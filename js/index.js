$(document).ready(function(){
    $('.call-review').click(function(e){
        e.preventDefault();
        $('.hidden-form-add-rewiew').css('display', 'block');

    })
    $('.form-rewiew').submit(function(e){
        e.preventDefault();
        let form = $(this);
        $.ajax({
            method: 'POST',
            url: '/setRewiew',
            data: form.serialize(),
            success: function(result){
                let data = JSON.parse(result);
                if(data.status == 'success'){
                    $('.form-rewiew').css('display', 'none')
                    $('.succes-masseges').css('display', 'inline-block')
                    $('.succes-masseges').css('color', '#fff')
                    setTimeout(function(){
                        $('.hidden-form-add-rewiew').css('display', 'none');
                    }, 1000)
                }else{
                    $('.form-rewiew').css('display', 'none')
                    $('.succes-masseges').css('display', 'inline-block')
                    $('.succes-masseges').css('color', '#fff')
                    $('.mes-success').text('Something  wrong');
                    setTimeout(function(){
                        $('.hidden-form-add-rewiew').css('display', 'none');
                    }, 1000)
                }
            }
        })
    })
})