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
    
    var menu = document.getElementById('nav');
    var btn = document.getElementById('btn-menu');
    
    var eventListener = (function(){
        
        menu.addEventListener('click', function(event){
            
            if (window.innerWidth <= 768)
                btn.checked = false;
            
        });
        
    })();
    
})();

document.addEventListener("DOMContentLoaded", function (event) {
    document.body.classList.remove('nojs');
    document.body.classList.add('loaded');
});
