var Button = (function(){
    
    var $button = document.getElementsByClassName('button');
    
    var createRipple = function (event) {
    
        var elemet = this,
            circle = document.createElement('div'),
            d = Math.max(this.clientWidth, this.clientHeight),
            rect = elemet.getBoundingClientRect();
        
        elemet.getBoundingClientRect

        circle.style.width = circle.style.height = d + 'px';
        circle.style.left = event.clientX - rect.left - d / 2 + 'px';
        circle.style.top = event.clientY - rect.top - d / 2 + 'px';

        circle.classList.add('ripple');

        elemet.appendChild(circle);

        setTimeout(function () {

            elemet.removeChild(circle);

        }, 1000);
    };
    
    var eventListener = (function () {
        
        Object.keys($button).forEach(function(key) {
            $button[key].addEventListener('mouseenter', createRipple);
            $button[key].addEventListener('click', createRipple);
        });
        
    })();
    
})();