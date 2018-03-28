var throttle = (callback, limit) => {
    
    var wait = false;
    return function () {
        if (!wait) {
            callback();
            wait = true;
            setTimeout(function () {
                wait = false;
            }, limit);
        }
    };

};

var stickyNavTop = $('#banner').offset().top - 1;

var stickyNav = function () {
    var scrollTop = $(window).scrollTop();

    if (scrollTop > stickyNavTop) $('#topbar').addClass('sticky');
    else $('#topbar').removeClass('sticky');
}

$(window).scroll(function () {
    throttle(stickyNav(), 80);
});