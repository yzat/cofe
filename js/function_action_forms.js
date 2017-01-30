// for edit data contacts in admin/contacts
function edit_contacts(data){
    var contacts=$('#form_edit_contacts').serialize();
    $.ajax({
        url: 'process.php',
        type: 'POST',
        data: contacts,
        enctype: 'multipart/form-data',
        dataType: 'json',
        success: function (data) {
            if(data.error==0){
                var vstavka="<h1>Контакты</h1>"+
                    <!-- Trigger the modal with a button -->
                    "<a data-toggle='modal' data-target='#modal_edit_contacts'>"+
                        "<span class='glyphicon glyphicon-pencil contacts-edit' style='font-size:25px'></span></p>"+
                    "</a>"+
                        "<strong>Компания 'Professional Coffee Service'</strong>"+
                    "<div class='location'>"+
                        "<p style='font-size:12px;'>"+
                        "<nobr>Юр. лицо:"+data.legal_entity+"</nobr><br>"+
                        "<nobr>ИНН/КПП:"+data.INN+"</nobr>"+
                    "</p>"+
                    "<p>"+data.address_place+" <br/> "+data.address_street+"<br/>"+data.address_country+"</p>"+
                    "</div>"+
                    "<ul class='contacts-list'>"+
                        "<li><span>Офис:</span>"+data.office+"</li>"+
                        "<li><span>Email:</span><a href='mailto:"+data.e_mail+"'>"+data.e_mail+"</a></li>"+
                        "<li><span>Skype:</span><a href='skype:"+data.skype+"'>"+data.skype+"</a></li>"+
                        "<li><span>Facebook:</span><a href='"+data.facebook+"'>"+data.facebook+"</a></li>"+
                    "</ul>";
                $('.contacts').html(vstavka);
                $('#modal_edit_contacts .close').click();
                $('#form_edit_contacts')[0].reset();
            }
            else if(data.error==1){
                $('.contacts').text(data.failed);
                $('#modal_edit_contacts .close').click();
                $('#form_edit_contacts')[0].reset();
            }
        }
    });
}