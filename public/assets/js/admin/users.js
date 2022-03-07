$(document).ready(() => {
    const usernamePattern = /^(?=.*[a-z])[a-zA-Z0-9\_]{8,25}$/;
    const emailPattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    let passwordPattern;

    if(edit)
        passwordPattern = /^$|^((?=.*\d)(?=.*[a-z]).{8,})$/;
    else
        passwordPattern =  /^((?=.*\d)(?=.*[a-z]).{8,})$/;

    function checkUsername() {
        validateField($('#username'), usernamePattern);
    }

    function checkEmail() {
        validateField($('#email'), emailPattern);
    }

    function checkPassword() {
        validateField($('#password'), passwordPattern);
    }

    $('#username').blur(checkUsername);
    $('#email').blur(checkEmail);
    $('#password').blur(checkPassword);

    $('#btnSubmit').click(function() {
        const result = submitForm([checkUsername, checkEmail, checkPassword], 'userForm');

        if(result)
            $(this).addClass('disabled');

        return result;
    });
});
