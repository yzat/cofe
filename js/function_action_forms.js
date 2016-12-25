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
                $('#list_gallery_images').load('list_gal_images.php?album_id='+data.album_id);
                $('#modal_edit_image_desc .close').click();
                $('#form_edit_image_desc_gal')[0].reset();
            }
        }
    });
}