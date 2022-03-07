$(document).ready(() => {
    $('#username').focus();

    const usernamePattern = /^(?=.*[a-z])[a-zA-Z0-9\_]{8,25}$/;
    const emailPattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    const passwordPattern = /^(?=.*\d)(?=.*[a-z]).{8,}$/;

    function checkUsername() {
        validateField($('#username'), usernamePattern);
    }

    function checkEmail() {
        validateField($('#email'), emailPattern);
    }

    function checkPassword() {
        validateField($('#password'), passwordPattern);
        checkConfirmPassword();
    }

    function checkConfirmPassword() {
        if($('#password').val() === '')
            return;

        if($('#confirmPassword').val() === $('#password').val() && !$('#password').hasClass('border-incorrect'))
            fieldCorrect($('#confirmPassword'));
        else
            fieldIncorrect($('#confirmPassword'));
    }

    $('#username').blur(checkUsername);
    $('#email').blur(checkEmail);
    $('#password').blur(checkPassword);
    $('#confirmPassword').blur(checkConfirmPassword);

    $('#btnRegister').click(function() {
        const result = submitForm([checkUsername, checkEmail, checkPassword, checkConfirmPassword], 'registerForm');

        if(result)
            $(this).addClass('disabled');

        return result;
    });
});
