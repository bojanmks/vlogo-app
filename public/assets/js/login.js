$(document).ready(() => {
    $('#email').focus();

    const emailPattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    const passwordPattern = /^(?=.*\d)(?=.*[a-z]).{8,}$/;

    function checkEmail() {
        validateField($('#email'), emailPattern);
    }

    function checkPassword() {
        validateField($('#password'), passwordPattern);
    }

    $('#email').blur(checkEmail);
    $('#password').blur(checkPassword);

    $('#btnLogin').click(function() {
        const result = submitForm([checkEmail, checkPassword], 'loginForm');

        if(result)
            $(this).addClass('disabled');

        return result;
    });
});
