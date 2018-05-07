function form_submit(){
    var fn = document.getElementById("form_name").value;
    var ln = document.getElementById("form_lastname").value;
    var em = document.getElementById("form_email").value;
    var ph = document.getElementById("form_phone").value;
    var me = document.getElementById("form_message").value


    document.getElementById("form_name").value = " ";
    document.getElementById("form_lastname").value = " ";
    document.getElementById("form_email").value = " ";
    document.getElementById("form_phone").value = " ";
    document.getElementById("form_message").value = " ";
    //alert("Form has been submitted");

    $('#success').click(function (e) {
        e.preventDefault()
        $('#message').html('<div class="alert alert-success fade in"><button type="button" class="close close-alert" data-dismiss="alert" aria-hidden="true">×</button>This is a success message</div>');
    })
}

