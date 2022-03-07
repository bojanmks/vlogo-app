$(document).ready(() => {
    const emailPattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    function checkEmail() {
        validateField($('#email'), emailPattern);
    }

    function checkSubject() {
        if($('#subject').val().trim() !== '')
            fieldCorrect($('#subject'));
        else
            fieldIncorrect($('#subject'));
    }

    function checkMessage() {
        if($('#message').val().trim() !== '')
            fieldCorrect($('#message'));
        else
            fieldIncorrect($('#message'));
    }

    $('#email').blur(checkEmail);
    $('#subject').blur(checkSubject);
    $('#message').blur(checkMessage);

    $('#btnSendMessage').click(function() {
        const result = submitForm([checkEmail, checkSubject, checkMessage], 'contactForm');

        if(result)
            $(this).addClass('disabled');

        return result;
    });
});
