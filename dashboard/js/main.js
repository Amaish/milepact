$(document).ready(function($) {
    // start of sign up user

    $('#signUp').click(function() {
        $('#signUp').html('Creating account...');
        $('#signUp').css("disabled", "1");


        var name = $('#name').val();
        var typeOfBusiness = $('#typeOfBusiness').val();
        var phoneNumber = $('#phoneNumber').val();        
        var email = $('#email').val();
        var location = $('#location').val();
        var password = $('#password').val();
        alert(name);

        $.post("../../../milePact/core/exe/SignUp/", {
            name: name,
            typeOfBusiness: typeOfBusiness,
            phoneNumber: phoneNumber,
            email: email,
            location: location,
            password: password

        }, function(UserSignUpFeedback) {
            if (UserSignUpFeedback == "1") {
                $('#lsresp').html('<font color="green">Account created...</font>');
               // window.location.href = "../agent/verify.php";
                $('#signUp').html('Sign up');
                $('#signUp').css("disabled", "0");
                console.log(UserSignUpFeedback);
            } else {
                $('#lsresp').html('<font color="red">' + UserSignUpFeedback + '</font>');
                $('#signUp').html('Sign up');
                $('#signUp').css("disabled", "0");
                console.log(UserSignUpFeedback);
            }
        });
    });

    // end of sign up user

    // start of signin agent

    $('#signinagent').click(function() {
        $('#signinagent').html('Signing In...');
        $('#signinagent').css("disabled", "1");



        var as_phonenumber = $('#as_phonenumber').val();
        var as_password = $('#as_password').val();
        //alert(as_phonenumber);

        $.post("../../core/exe/loginAgent/", {

            as_phonenumber: as_phonenumber,
            as_password: as_password

        }, function(agentSigninFeedback) {
            if (agentSigninFeedback == "1") {
                // $('#silsresp').html('<font color="green">Account created...</font>');
                window.location.href = "../agent/index.php";
                $('#signinagent').html('Sign In');
                $('#signinagent').css("disabled", "0");
                console.log(agentSigninFeedback);
            } else {
                $('#silsresp').html('<font color="red">' + agentSigninFeedback + '</font>');
                $('#signinagent').html('Sign In');
                $('#signinagent').css("disabled", "0");
                console.log(agentSigninFeedback);
            }
        });
    });

    // end of agent signin
    // start of verify agent
    $('#verifyAgent').click(function() {
        $('#verifyAgent').html('Verifying agent...');
        $('#verifyAgent').css("disabled", "1");


        var agentcode = $('#agentcode').val();


        $.post("../../core/exe/verifyAgent/", {
            agentcode: agentcode


        }, function(agentVerifyFeedback) {
            if (agentVerifyFeedback == "1") {
                //$('#alsresp').html('<font color="green">Code verified...</font>');
                window.location.href = "../agent/index.php";
                $('#verifyAgent').html('Verify');
                $('#verifyAgent').css("disabled", "0");
                console.log(agentVerifyFeedback);
            } else {
                $('#alsresp').html('<font color="red">' + agentVerifyFeedback + '</font>');
                $('#verifyAgent').html('Verify');
                $('#verifyAgent').css("disabled", "0");
                console.log(agentVerifyFeedback);
            }
        });
    });
    //end of verifying agent
    // start of resend agent code
    $('#resendAgent').click(function() {
        $('#resendAgent').html('Resending code...');
        $('#resendAgent').css("disabled", "1");



        $.post("../../core/exe/resendAgent/", {



        }, function(agentVerifyFeedback) {
            if (agentVerifyFeedback == "1") {
                $('#ralsresp').html('<font color="green">Code Resent...</font>');
                //window.location.href = "../agent/verify.php";
                $('#resendAgent').html('Resend');
                $('#resendAgent').css("disabled", "0");
                console.log(agentVerifyFeedback);
            } else {
                $('#ralsresp').html('<font color="red">' + agentVerifyFeedback + '</font>');
                $('#resendAgent').html('Resend');
                $('#resendAgent').css("disabled", "0");
                console.log(agentVerifyFeedback);
            }
        });
    });
    //end of resend agent code
});