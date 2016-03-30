function custom_form_ajax_send(name,email,mess){
    jQuery.ajax({
        type: 'POST',
        url: custom_form_Ajax.ajaxurl,
        dataType:'json',
        data:{
            'name':jQuery(name).val(),
            'email':jQuery(email).val(),
            'mess':jQuery(mess).val(),
            'nonce': custom_form_Ajax.nonce,
            'action':'custom_form_send_action'
        },
        success: function (data) {
            if(data.error==""){
                alert(data.work);
            }else{
                alert(data.error);
            }
        },
        error: function () {
            alert("Connection error");
        }
    });
}