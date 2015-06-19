var failedOnce = false;

$(document).ready(function () {
    $('#form').submit(function(event) {
        event.preventDefault();

        $.ajax({
            type: 'POST',
            url: 'submit-form.php',
            contentType: false,
            processData: false,
            data: new FormData(this),
            dataType: "text",
            
            success: function(result) {
                if (result == 'success') {
                    window.location.assign("success.php");
                } else {
                    $('html, body').animate({ scrollTop: 0 }, 'slow');
                    
                    if(!failedOnce) {
                        failedOnce = true;
                        $('.error').append("<center><p><b>Your form is incomplete. Please try again.</b></p></center>");
                    } 
                } 
            }
        });
    });
});