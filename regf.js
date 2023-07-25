
$(document).ready(function()
{

    $("#form").validate({
            rules: {
                username: {
                    required: true,
                    minlength: 2 //for length of lastname
                },
                password: {
                    required: true,
                    minlength: 8
                },
                confirm_password: {
                    required: true,
                    minlength: 8,
                    equalTo: "#password" //for checking both passwords are same or not
                },
                email: {
                    required: true,
                    email: true,
                    pattern : /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@(ug.cusat.ac.in)$/
                },
                num:{
                    required:true,
                    minlength:10,
                    maxlength:10,
                    digits:true

                }
              
            },
            // in 'messages' user have to specify message as per rules
            messages: {
                username: {
                    required: " Please enter a username",
                    minlength: " Your username must consist of at least 2 characters"
                },
                password: {
                    required: " Please enter a password",
                    minlength: " Your password must be consist of at least 8 characters"
                },
                confirm_password: {
                    required: " Please enter a password",
                    minlength: " Your password must be consist of at least 8 characters",
                    equalTo: " Please enter the same password as above"
                },
                email:{
                    required:"please enter a email id ",
                    email:"invalid email id",
                    pattern:"please enter a valid email id"
                },
                num:{
                    required:"please enter a number",
                    minlength:"phone number consist of at least 10 digits",
                    maxlength:"phone number consist of at most 10 digits",
                    digits:"only digits are allowed"
                }
                
            }
        });
    });



