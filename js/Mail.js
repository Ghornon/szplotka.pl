var mail = (function(){
    
    var button = document.getElementById('send');
    var modal = document.getElementById('modal');
    
    var form = {
        body: document.getElementById('contact-form'),
        name: document.getElementById('name'),
        email: document.getElementById('email'),
        message: document.getElementById('message'),
    }
    
    var respond = function (type, lang) {
        
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
        
        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function (data) {
            
            if (xmlhttp.readyState == XMLHttpRequest.DONE) { // XMLHttpRequest.DONE == 4
                
                if (xmlhttp.status == 200) {
                    
                    var respond = JSON.parse(data);
            
                        if (respond.status) {

                            respond(true);

                        } else {

                            respond(false);

                        }
                    
                } else if (xmlhttp.status == 400) {
                    respond(false);
                    
                } else {
                    respond(false);
                }
            }
            
        };

        xmlhttp.open("GET", "mail.php", true);
        xmlhttp.send();

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