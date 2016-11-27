// function for avtorization
function avtorizasia(){
    var sendpost=$('#form_admin_data').serialize();
    // console.log(sendpost);
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
            window.location="admin/index.php";
            $('#form_admin_data').trigger('close');
            $('#form_admin_data')[0].reset();
        }else if(data.target='empty_login_password'){
            $('#error_info').html('Введите или Не корректно ввели логин и пароль').css('color','red');
            $("#login").css('border','red solid 2px').click(function(){
                $('#error_info').html("<p id='error_info'></p>");
                $("#login").css('border','grey solid 2px');
            });
            $("#password").css('border','red solid 2px').click(function(){
                $('#error_info').html("<p id='error_info'></p>");
                $("#password").css('border','grey solid 2px');
            });
        }
    });
}