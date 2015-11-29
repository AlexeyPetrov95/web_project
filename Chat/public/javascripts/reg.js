
$(document).ready(function(){
    var pattern=/^[A-Za-z]+$/;
    var logpattern = /^[A-Za-z0-9]+$/;

    var check= false;

    var name = $("[name='name']");
    var lastname = $("[name='lastname']");
    var login = $("[name='login']");
    var password = $("[name='password']");
    var confirmpassword = $("[name='confirmpassword']");
    var submit = $("[name='submit']");

    name.blur(function(){
        if (name.val().search(pattern) == 0) {
            name.css('border', '2px solid #43CD80');
            check=true;
        } else {
            name.css('border', '2px solid #CD5C5C');
            $('#submit').css('background', ' #CD5C5C');
            $('#submit').attr('disabled', true);
            check=false;
        }
    });

    lastname.blur(function(){
        if (lastname.val().search(pattern)==0){
            lastname.css('border', '2px solid #43CD80');
            check=true;
        }else{
            check=false;
            lastname.css('border', '2px solid #CD5C5C');
            $('#submit').css('background', ' #CD5C5C');
            $('#submit').attr('disabled', true);
        }
    });

    login.blur(function(){
        $('#error').text('');
        if (login.val().search(logpattern)==0){
            check=true;
            login.css('border', '2px solid #43CD80');
        }else{
            login.css('border', '2px solid #CD5C5C');
            check=false;
            $('#submit').css('background', ' #CD5C5C');
            $('#submit').attr('disabled',true);
        }
    });

    password.blur(function(){
        if (password.val() != ""){
            check=true;
            password.css('border', '2px solid #43CD80');
        }else{
            check=false;
            password.css('border', '2px solid #CD5C5C');
            $('#submit').css('background', ' #CD5C5C');
            $('#submit').attr('disabled', true);
        }
    });

    confirmpassword.blur(function(){
        if (confirmpassword.val() != "" && confirmpassword.val()==password.val()){
            check = true;
            confirmpassword.css('border', '2px solid #43CD80');
            if (check){
                $('#submit').attr('disabled', false);
                $('#submit').css('background', ' #43CD80');
            }
        }else{
            check= false;
            password.css('border', '2px solid #CD5C5C');
            confirmpassword.css('border', '2px solid #CD5C5C');
            $('#submit').css('background', ' #CD5C5C');
            $('#submit').attr('disabled', true);
        }
    });
});