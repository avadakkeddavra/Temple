$(document).ready(function(){
    $('#menu-show').on('click', function(){
        var status = $('.mobile-menu').attr('data-status');
        if(status == 'hidden')
        {
            $('.mobile-menu').fadeIn();
            $('.mobile-menu').animate({
                    height: '100%',
                    opacity: 1,

            },200,function(){
                $(this).children('ul').children('li').each(function(i,elem){
                    var delay = 100*i;
                    $(this).animate({
                        marginLeft : 0,
                        opacity : 1
                    },delay);
                })
            });
            $('.mobile-menu').attr('data-status','visible');
            $(this).html('<i class="fa fa-close"></i>');
        }
        else
        {
             $('.mobile-menu').children('ul').children('li').each(function(i,elem){
                    var delay = 100*i;
                    $(this).animate({
                        marginLeft : '-50px',
                        opacity : 0
                    },delay);
                })
            
            $('.mobile-menu').animate({
                opacity : 0,
                height : '0%',
            },200,'linear');
            $('.mobile-menu').attr('data-status','hidden');
            $(this).html('<i class="fa fa-bars"></i>');
        }
    })
})
$(document).ready(function(){
    $(document).keydown(function(e) {
        if (e.keyCode == 27) {
            $('.mobile-menu').children('ul').children('li').each(function(i,elem){
                    var delay = 100*i;
                    $(this).animate({
                        marginLeft : '-50px',
                        opacity : 0
                    },delay);
                })
            
            $('.mobile-menu').animate({
                opacity : 0,
                height : '0%',
            },200,'linear');
            $('.mobile-menu').attr('data-status','hidden');
            $('#menu-show').html('<i class="fa fa-bars"></i>');
        }   
    });
})