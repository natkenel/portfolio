$(document).ready(function () {
    $('#send_message').click(function (e) {

        //Stop form submission & check the validation
        e.preventDefault();

        // Variable declaration
        var error = false;
        var Fname = $('#Fname').val();
        var Lname = $('#Lname').val();
        var email = $('#email').val();
        var subject = $('#subject').val();
        var message = $('#message').val();

        // Form field validation
        if (Fname.length == 0) {
            var error = true;
            $('#Fname_error').fadeIn(500);
        } else {
            $('#Fname_error').fadeOut(500);
        }
        if (Lname.length == 0) {
            var error = true;
            $('#Lname_error').fadeIn(500);
        } else {
            $('#Lname_error').fadeOut(500);
        }
        if (email.length == 0 || email.indexOf('@') == '-1') {
            var error = true;
            $('#email_error').fadeIn(500);
        } else {
            $('#email_error').fadeOut(500);
        }
        if (message.length == 0) {
            var error = true;
            $('#message_error').fadeIn(500);
        } else {
            $('#message_error').fadeOut(500);
        }

        // If there is no validation error, next to process the mail function
        if (error == false) {
            // Disable submit button just after the form processed 1st time successfully.
            $('#send_message').attr({
                'disabled': 'true',
                'value': 'Sending...'
            });

            /* Post Ajax function of jQuery to get all the data from the submission of the form as soon as the form sends the values to email.php*/
            $.post("email.php", $("#myForm").serialize(), function (result) {
                //Check the result set from email.php file.
                if (result == 'sent') {
                    //If the email is sent successfully, remove the submit button
                    $('#send_message').remove();
                    //Display the success message
                    $('#success').fadeIn(500);
                } else {
                    //Display the error message
                    $('#mail_fail').fadeIn(500);
                    // Enable the submit button again
                    $('#send_message').removeAttr('disabled').attr('value', 'Send');
                }
            });
        }
    });
    $('#myModal').on('hidden.bs.modal', function () {
        $('#Fname_error').fadeOut(500);
        $('#Lname_error').fadeOut(500);
        $('#email_error').fadeOut(500);
        $('#message_error').fadeOut(500);
    });

});
