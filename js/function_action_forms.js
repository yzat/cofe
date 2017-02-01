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
            if(data.error==0) {
                var vstavka = "<h1>Контакты</h1>" +
                    <!-- Trigger the modal with a button -->
                    "<a data-toggle='modal' data-target='#modal_edit_contacts'>" +
                    "<span class='glyphicon glyphicon-pencil contacts-edit' style='font-size:25px'></span></p>" +
                    "</a>" +
                    "<strong>Компания 'Professional Coffee Service'</strong>" +
                    "<div class='location'>" +
                    "<p style='font-size:12px;'>" +
                    "<nobr>Юр. лицо:" + data.legal_entity + "</nobr><br>" +
                    "<nobr>ИНН/КПП:" + data.INN + "</nobr>" +
                    "</p>" +
                    "<p>" + data.address_place + " <br/> " + data.address_street + "<br/>" + data.address_country + "</p>" +
                    "</div>" +
                    "<ul class='contacts-list'>" +
                    "<li><span>Офис:</span>" + data.office + "</li>" +
                    "<li><span>Email:</span><a href='mailto:" + data.e_mail + "'>" + data.e_mail + "</a></li>" +
                    "<li><span>Skype:</span><a href='skype:" + data.skype + "'>" + data.skype + "</a></li>" +
                    "<li><span>Facebook:</span><a href='" + data.facebook + "'>" + data.facebook + "</a></li>" +
                    "</ul>";
                $('.contacts').html(vstavka);
                $('#modal_edit_contacts .close').click();
                // $('#form_edit_contacts')[0].reset();
                // set new data in footer
                var zxc="<div class='max-wrap'>"+
                            "<div class='footer-contacts'>"+
                                "<span>"+data.office+"</span>"+
                                "<span><a href='mailto:"+data.e_mail+"'>"+data.e_mail+"</a></span>"+
                                "</div>"+
                                "<div class='logo-footer'><a href=''><img src='../img/logo-footer.png' alt=''/></a></div>"+
                                "<div class='location-footer'>"+
                                ""+data.address_place+", <a href=''>"+data.address_street+" </a>"+
                                "<div>"+data.detail_address+" ,  "+data.address_country+"</div>"+
                            "</div>"+
                        "</div>";
                $("#footer").html(zxc);
                // set value in form id=form_edit_contacts
                $("#form_edit_contacts input[name=legal_entity]").val(data.legal_entity);
                $("#form_edit_contacts input[name=INN]").val(data.INN);
                $("#form_edit_contacts input[name=address_place]").val(data.address_place);
                $("#form_edit_contacts input[name=address_street]").val(data.address_street);
                $("#form_edit_contacts input[name=detail_address]").val(data.detail_address);
                $("#form_edit_contacts input[name=address_country]").val(data.address_country);
                $("#form_edit_contacts input[name=office]").val(data.office);
                $("#form_edit_contacts input[name=e-mail]").val(data.e_mail);
                $("#form_edit_contacts input[name=skype]").val(data.skype);
                $("#form_edit_contacts input[name=facebook]").val(data.facebook);


            }else if(data.error==1){
                $('.contacts').text(data.failed);
                $('#modal_edit_contacts .close').click();
                $('#form_edit_contacts')[0].reset();
            }
        }
    });
}