$('.page-scroll').on('click', function(event){

    var href = $(this).attr('href'),
        secID = $(href);
    
    $('body').animate({
        scrollTop: secID.offset().top - 50            
    },1000);
    
    // event.preventDefault();
});