var ScrollTo = (function() {
    
    var windowWidth = window.innerWidth;
    var windowHeight = window.innerHeight;
    var $button = document.getElementsByClassName('scrollTo');
    
    var scrollTo = function(element, to, duration) {

        var start = element.scrollTop,
            change = to - start,
            currentTime = 0,
            increment = 20;

        var animateScroll = function () {
            
            currentTime += increment;
            
            var val = Math.easeInOutQuad(currentTime, start, change, duration);
            
            element.scrollTop = val;
            
            if (currentTime < duration)
                setTimeout(animateScroll, increment);
            
        };

        animateScroll();
    }

    //t = current time
    //b = start value
    //c = change in value
    //d = duration
    Math.easeInOutQuad = function (t, b, c, d) {

        t /= d / 2;

        if (t < 1)
            return c / 2 * t * t + b;

        t--;

        return -c / 2 * (t * (t - 2) - 1) + b;

    };
    
    var eventListener = (function(){
        
        Object.keys($button).forEach(function(key) {

            var attr = $button[key].getAttribute('href').substring(1);
            var element = document.getElementById(attr);

            if (element != null) {
                
                var height = element.clientHeight;

                var elementTop = element.getBoundingClientRect().top + window.scrollY;

                var to = elementTop - 60;

                $button[key].addEventListener('click', function(event) {
                    scrollTo(document.documentElement, to, 1250);
                    event.preventDefault();
                });   
                
            }

        });
        
    })();
    
})();

