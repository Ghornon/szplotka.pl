var Sticky = (function() {
 
    var stickyNavTop = document.getElementById('banner').offsetTop - 1;
    var topBar = document.getElementById('topbar');

    var stickyNav = function () {
        
        var scrollTop = window.scrollY;

        if (scrollTop > stickyNavTop)
            topBar.classList.add('sticky');
        else 
            topBar.classList.remove('sticky');
        
    };
    
    var eventListener = function() {
        
        window.addEventListener('scroll', function() {
       
            throttle(stickyNav(), 80);

        });
        
    };
    
    var Sticky = (function(){
        
        stickyNav();
        eventListener();
        
    })();

})();