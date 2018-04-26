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

var MessageTo = (function() {
    
    var $button = document.getElementsByClassName('messageTo');
    var message = document.getElementById('message');
    
    Object.keys($button).forEach(function(key) {
        
        $button[key].addEventListener('click', function(event) {
            
            var attr = $button[key].getAttribute('data-msg');
            message.textContent = "Do: " + attr;
            
            event.preventDefault();
            
        });
        
    });
    
})();

var Menu = (function() {
    
    var menu = document.getElementById('nav').childNodes[7];
    var btn = document.getElementById('btn-menu');
    
    var eventListener = (function(){
        
        menu.addEventListener('click', function(event){
            
            if (window.innerWidth <= 768) {
                btn.checked = false;
                event.stopPropagation();
            }  

        });
         
    })();
    
})();

var Hideme = (function() {
    
    var $elements = document.getElementsByClassName('hideme');
    
    var animation = function(element) {
        
        if(!element.classList.contains('animated')) {
            
            var elementTop = element.getBoundingClientRect().top + window.scrollY;
        
            if (elementTop < (window.scrollY + window.innerHeight - window.innerHeight / 3) ) {

                element.classList.add('animated');

            }     
            
        }
        
    };
    
    var eventListener = (function() {
        
        window.addEventListener('scroll', function() {
            
            Object.keys($elements).forEach(function(key) {
                
                throttle(animation($elements[key]), 80);
                
            });

        });
        
    })();
    
})();

document.addEventListener("DOMContentLoaded", function (event) {
    
    setTimeout(function(){
        document.body.classList.add('loaded');
    }, 500);
    
    var maps = document.getElementsByClassName('map');
    Object.keys(maps).forEach(function(key) {
        
        var iframe = document.createElement('iframe');
        iframe.setAttribute('src', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2585.430769626756!2d19.96647921589217!3d49.608483055551886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47160a812dafbe35%3A0x22cbbb8071e35c9f!2sPoniatowskiego+6%2C+34-700+Rabka-Zdr%C3%B3j!5e0!3m2!1spl!2spl!4v1522152650398');
        
        maps[key].appendChild(iframe);

    });
});