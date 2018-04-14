var Mail = (function(){
    
    var button = document.getElementById('send');
    var modal = document.getElementById('modal');
    
    var form = {
        body: document.getElementById('contact-form'),
        name: document.getElementById('name'),
        email: document.getElementById('email'),
        message: document.getElementById('message'),
    }
    
    var respond = function (type) {
        
        var message = "";
        
        
        if (type) {
            message = "Wiadomość została wysłana poprawnie!";
            form.body.reset();
        }
        else {
            message = "Wiadomość nie została wysłana poprawnie! Coś poszło nie tak!";
        }
            
        
        modal.children[1].innerHTML = message;
        modal.classList.add('active');
        
        console.log("Status wiadomości: " + message);
        
    };
    
    var sendRequest = function (name, email, message) {
        
        function postAjax(url, data, success) {
            var params = typeof data == 'string' ? data : Object.keys(data).map(
                function (k) {
                    return encodeURIComponent(k) + '=' + encodeURIComponent(data[k])
                }
            ).join('&');

            var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
            xhr.open('POST', url);
            xhr.onreadystatechange = function () {
                if (xhr.readyState > 3 && xhr.status == 200) {
                    success(xhr.responseText);
                }
            };
            xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.send(params);
            return xhr;
        }
        
        postAjax('mail.php?ajax=true', { name: name, email: email, message: message }, function(data){ 
            
            var respondData = JSON.parse(data);
            
            respond(respondData.status);     
            
        });

    };
    
    var validateEmail = function (email) {
        var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return regex.test(email);
    };
    
    var validation = function () {
        
        var name = form.name.value,
            email = form.email.value,
            message = form.message.value;
        
        console.log(form.name.value);

        if (name.length > 3 && validateEmail(email) && message.length > 15) {

            console.log(name + " " + email + " " + message);

            sendRequest(name, email, message);
            
        } else {
            
            respond(false);

        }
        
    };
    
    var eventListener = (function() {
        
        button.addEventListener('click', function(event) {
            
            validation();
            event.preventDefault();
            
        });
        
        modal.addEventListener('click', function(event) {
            
            modal.classList.remove('active');
            event.preventDefault();
            
        });
        
    })();
    
    return {
        sendRequest: sendRequest
    }
    
})();