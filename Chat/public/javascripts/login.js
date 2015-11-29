$(document).ready(function(){
    var login = $('#login');
    var password = $('#password');

    var check = false;
    var checkP = false;

    login.blur(function(){
       if(login.val() != ''){
           check = true;
           if(check && checkP){
               $('#submitForLogin').attr('disabled', false);
               $('#submitForLogin').css('background','#43CD80');
           }
       }else{
           check = false;
           $('#submitForLogin').attr('disabled', true);
           $('#submitForLogin').css('background','#CD5C5C');
       }
    });
    password.blur(function(){
        if(password.val() != ''){
            checkP = true;
            if(check && checkP){
                $('#submitForLogin').attr('disabled', false);
                $('#submitForLogin').css('background','#43CD80');
            }

        }else{
            checkP = false;
            $('#submitForLogin').attr('disabled', true);
            $('#submitForLogin').css('background','#CD5C5C');
        }
    });
});


//автодополнение