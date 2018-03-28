$('.scrollTo').on('click', function (event) {

    var attr = $(this).attr('href');

    $('html, body').animate({
        scrollTop: $(attr).offset().top,
    }, 1000);
    
    console.log("Scrolling to " + attr);
    event.preventDefault();

});