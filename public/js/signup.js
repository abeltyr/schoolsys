
    var role = document.querySelector('[name="role"]');
    role.addEventListener('focusin', function(e){
        document.getElementById('roleGroup').classList.add("focused");
        document.getElementById('roler').style.background = "#0e8696";
        document.getElementById('roler').style.color = "#fff";
    });
    role.addEventListener('focusout', function(e){
       document.getElementById('roleGroup').classList.remove("focused");
       document.getElementById('roler').style.background = "#fff";
        document.getElementById('roler').style.color = "#000";
    });
/*
    var btn = document.querySelector('button[type="submit"]');
    var form = document.forms[0];
    var fname = document.querySelector('[name="fname"]');
    var lname = document.querySelector('[name="lname"]');
    var email = document.querySelector('[name="email"]');
    var phone = document.querySelector('[name="phone"]');
    var password = document.querySelector('[name="password"]');
    var conpass = document.querySelector('[name="conpass"]');
    btn.addEventListener('click', function(ev){
        if (form.checkValidity()) {
            btn.querySelector('.signingin').className = 'signingin';
            btn.querySelector('.signin').className = 'signin hidden';
        } else {
            ev.preventDefault();
        }
    });
    fname.focus();
    document.getElementById('fnameGroup').classList.add("focused");
    
    // Focus events for email and password fields
    fname.addEventListener('focusin', function(e){
        document.getElementById('fnameGroup').classList.add("focused");
    });
    fname.addEventListener('focusout', function(e){
       document.getElementById('fnameGroup').classList.remove("focused");
    });
    lname.addEventListener('focusin', function(e){
        document.getElementById('lnameGroup').classList.add("focused");
    });
    lname.addEventListener('focusout', function(e){
       document.getElementById('lnameGroup').classList.remove("focused");
    });
    email.addEventListener('focusin', function(e){
        document.getElementById('emailGroup').classList.add("focused");
    });
    email.addEventListener('focusout', function(e){
       document.getElementById('emailGroup').classList.remove("focused");
    });

    phone.addEventListener('focusin', function(e){
        document.getElementById('phoneGroup').classList.add("focused");
    });
    phone.addEventListener('focusout', function(e){
       document.getElementById('phoneGroup').classList.remove("focused");
    });

    conpass.addEventListener('focusin', function(e){
        document.getElementById('conpassGroup').classList.add("focused");
    });
    conpass.addEventListener('focusout', function(e){
       document.getElementById('conpassGroup').classList.remove("focused");
    });
    password.addEventListener('focusin', function(e){
        document.getElementById('passwordGroup').classList.add("focused");
    });
    password.addEventListener('focusout', function(e){
       document.getElementById('passwordGroup').classList.remove("focused");
    });

*/
