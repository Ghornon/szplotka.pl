"use strict";var Button=function(){var t=document.getElementsByClassName("button"),n=function(e){var t=this,n=document.createElement("div"),o=Math.max(this.clientWidth,this.clientHeight),a=t.getBoundingClientRect();t.getBoundingClientRect,n.style.width=n.style.height=o+"px",n.style.left=e.clientX-a.left-o/2+"px",n.style.top=e.clientY-a.top-o/2+"px",n.classList.add("ripple"),t.appendChild(n),setTimeout(function(){t.removeChild(n)},1e3)};Object.keys(t).forEach(function(e){t[e].addEventListener("mouseenter",n),t[e].addEventListener("click",n)})}(),Mail=function(){var e=document.getElementById("send"),n=document.getElementById("modal"),a={body:document.getElementById("contact-form"),name:document.getElementById("name"),email:document.getElementById("email"),message:document.getElementById("message")},d=function(e){var t="";e?(t="Wiadomość została wysłana poprawnie!",a.body.reset()):t="Wiadomość nie została wysłana poprawnie! Coś poszło nie tak!",n.children[1].innerHTML=t,n.classList.add("active"),console.log("Status wiadomości: "+t)},i=function(e,t,n){var o,a,i,s,c;o="mail.php?ajax=true",i=function(e){var t=JSON.parse(e);d(t.status)},s="string"==typeof(a={name:e,email:t,message:n})?a:Object.keys(a).map(function(e){return encodeURIComponent(e)+"="+encodeURIComponent(a[e])}).join("&"),(c=window.XMLHttpRequest?new XMLHttpRequest:new ActiveXObject("Microsoft.XMLHTTP")).open("POST",o),c.onreadystatechange=function(){3<c.readyState&&200==c.status&&i(c.responseText)},c.setRequestHeader("X-Requested-With","XMLHttpRequest"),c.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),c.send(s)};e.addEventListener("click",function(e){var t,n,o;t=a.name.value,n=a.email.value,o=a.message.value,console.log(a.name.value),3<t.length&&/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(n)&&15<o.length?(console.log(t+" "+n+" "+o),i(t,n,o)):d(!1),e.preventDefault()}),n.addEventListener("click",function(e){n.classList.remove("active"),e.preventDefault()});return{sendRequest:i}}(),ScrollTo=function(){window.innerWidth,window.innerHeight;var o=document.getElementsByClassName("scrollTo");Math.easeInOutQuad=function(e,t,n,o){return(e/=o/2)<1?n/2*e*e+t:-n/2*(--e*(e-2)-1)+t};Object.keys(o).forEach(function(e){var t=o[e].getAttribute("href").substring(1),n=document.getElementById(t);if(null!=n){n.clientHeight;var c=n.getBoundingClientRect().top+window.scrollY-60;o[e].addEventListener("click",function(e){var n,t,o,a,i,s;n=document.documentElement,t=c,o=1250,a=n.scrollTop,i=t-a,s=0,function e(){s+=20;var t=Math.easeInOutQuad(s,a,i,o);n.scrollTop=t,s<o&&setTimeout(e,20)}(),e.preventDefault()})}})}(),Sticky=function(){var t=document.getElementById("banner").offsetTop-1,n=document.getElementById("topbar"),e=function(){var e=window.scrollY;t<e?n.classList.add("sticky"):n.classList.remove("sticky")};e(),window.addEventListener("scroll",function(){throttle(e(),80)})}(),throttle=function(e,t){var n=!1;return function(){n||(e(),n=!0,setTimeout(function(){n=!1},t))}},MessageTo=function(){var o=document.getElementsByClassName("messageTo"),a=document.getElementById("message");Object.keys(o).forEach(function(n){o[n].addEventListener("click",function(e){var t=o[n].getAttribute("data-msg");a.textContent="Do: "+t,e.preventDefault()})})}(),Menu=function(){var e=document.getElementById("nav").childNodes[7],t=document.getElementById("btn-menu");e.addEventListener("click",function(e){window.innerWidth<=768&&(t.checked=!1,e.stopPropagation())})}(),Hideme=function(){var n=document.getElementsByClassName("hideme");window.addEventListener("scroll",function(){Object.keys(n).forEach(function(e){var t;throttle(void((t=n[e]).classList.contains("animated")||t.getBoundingClientRect().top+window.scrollY<window.scrollY+window.innerHeight-window.innerHeight/3&&t.classList.add("animated")),80)})})}();document.addEventListener("DOMContentLoaded",function(e){document.body.classList.add("loaded");var n=document.getElementsByClassName("map");Object.keys(n).forEach(function(e){var t=document.createElement("iframe");t.setAttribute("src","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2585.430769626756!2d19.96647921589217!3d49.608483055551886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47160a812dafbe35%3A0x22cbbb8071e35c9f!2sPoniatowskiego+6%2C+34-700+Rabka-Zdr%C3%B3j!5e0!3m2!1spl!2spl!4v1522152650398"),n[e].appendChild(t)})});
//# sourceMappingURL=index.js.map