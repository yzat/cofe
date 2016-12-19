// function for avtorization
function avtorizasia(){
    var sendpost=$('#form_admin_data').serialize();
    $.ajax({
        url: "process_view.php",
        type: "POST",
        data: sendpost,
        enctype: 'multipart/form-data',
        dataType: 'json',
        // processData: false,  // tell jQuery not to process the data
        // contentType: false,   // tell jQuery not to set contentType
    }).done(function (data) {
        if(data.target=='admin_part'){
            $('#login,#password').css("border","green solid 2px");
            setTimeout(function(){
                window.location='admin/index.php';
                $('#form_admin_data')[0].reset();
               },200);

        }
        else if(data.target=='unknown_login_password'){
            $('#error_info').html('Проверьте логин и/или пароль!').css('color','red');
            $('#login').css("border","red solid 2px").click(function(){
                $('#error_info').html('<p id=`error_info`></p>');
                $('#login,#password').css("border","grey solid 2px");
            });
            $('#error_info').html('Проверьте логин и/или пароль!').css('color','red');
            $('#password').css("border","red solid 2px").click(function(){
                $('#error_info').html('<p id=`error_info`></p>');
                $('#login,#password').css("border","grey solid 2px");
            });
        }
    });
}
//function for checking form for not empty
function validate_form ( )
{
    var login =document.form_admin.login.value;
    var password =document.form_admin.password.value;
    valid = true;
    if ( login == ""  && password == "")
    {
        $('#error_info').html('Пожалуйста заполните поле login и password').css('color','red');
        $('#login,#password').css("border","red solid 2px").click(function() {
            $('#error_info').html('<p id=`error_info`></p>');
            $('#login,#password').css("border", "grey solid 2px");
        });
        valid = false;
    }else{
        if ( document.form_admin.login.value == "" )
        {
            $('#error_info').html('Пожалуйста заполните поле login').css('color','red');
            $('#login').css("border","red solid 2px").click(function() {
                $('#error_info').html('<p id=`error_info`></p>');
                $('#login').css("border", "grey solid 2px");
            });
            valid = false;
        }
        if ( document.form_admin.password.value == "" )
        {
            $('#error_info').html('Пожалуйста заполните поле Password').css('color','red');
            $('#password').css("border","red solid 2px").click(function() {
                $('#error_info').html('<p id=`error_info`></p>');
                $('#password').css("border", "grey solid 2px");
            });
            valid = false;
        }
        if(login!='' && password!=''){
            javascript:avtorizasia(this);return false;
        }
    }

    return valid;
}