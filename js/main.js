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

document.addEventListener("DOMContentLoaded", function (event) {
    document.body.classList.remove('nojs');
    document.body.classList.add('loaded');
});
