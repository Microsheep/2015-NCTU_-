$(document).ready(function(){
    var duration = 600;
    var wwidth  = $(window).width();
    if ( wwidth<=768 ){
        $('body').append('<div id="toTop" class="btn btn-success btn"><i class="fa fa-arrow-up"></i>Back to Top</div>');
    } else{
        $('body').append('<div id="toTop" class="btn btn-success btn-lg"><i class="fa fa-arrow-up"></i>Back to Top</div>');
    }
    $(window).scroll(function () {
        if ($(this).scrollTop() != 0) {
            $('#toTop').fadeIn();
        } else {
            $('#toTop').fadeOut();
        }
    }); 
    $('#toTop').click(function(){
        $("html, body").animate({ scrollTop: 0 }, duration);
        return false;
    });
});
