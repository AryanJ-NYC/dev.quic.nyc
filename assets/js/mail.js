var failedOnce = false;

$(document).ready(function () {

    $('#apply-form').submit(function(event) {
        event.preventDefault();

        $.ajax({
            type: 'POST',
            url: 'apply-form.php',
            contentType: false,
            processData: false,
            data: new FormData(this),
            dataType: "text",
            
            success: function(result) {
                if ($.trim(result) == 'success') {
                    window.location.assign("success.php");
                } else {
                    $('html, body').animate({ scrollTop: 0 }, 'slow');
                    if(!failedOnce) {
                        failedOnce = true;
                        $('.error').append("<p class='text-danger'><b>Your form is incomplete. Please try again.</b></p>");
                    } 
                } 
            }
        });
    });

    $('#contact-form').submit(function(event) {
        event.preventDefault();

        $.ajax({
            type: 'POST',
            url: 'contact-form.php',
            contentType: false,
            processData: false,
            data: new FormData(this),
            dataType: "text",
            
            success: function(result) {
                if ($.trim(result) == 'success') {
                    window.location.assign("success.php");
                } else {
                    $('html, body').animate({ scrollTop: 0 }, 'slow');
                    if(!failedOnce) {
                        failedOnce = true;
                        $('.error').append("<p class='text-danger'><b>Your form is incomplete. Please try again.</b></p>");
                    } 
                } 
            }
        });
    });

    $('#student-apply-form').submit(function(event) {
        event.preventDefault();

        $.ajax({
            type: 'POST',
            url: 'student-submit-form.php',
            contentType: false,
            processData: false,
            data: new FormData(this),
            dataType: "text",
            
            success: function(result) {
                if ($.trim(result) == 'success') {
                    window.location.assign("success.php");
                } else {
                    $('html, body').animate({ scrollTop: 0 }, 'slow');
                    if(!failedOnce) {
                        failedOnce = true;
                        $('.error').append("<p class='text-danger'><b>Your form is incomplete. Please try again.</b></p>");
                    } 
                } 
            }
        });
    });
});