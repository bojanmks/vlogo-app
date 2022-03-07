$(document).ready(() => {
    const namePattern = /^[A-Z][a-z]{2,}(\s[a-zA-Z][a-z]{2,})*$/;

    function checkName() {
        validateField($('#name'), namePattern);
    }

    $('#name').blur(checkName);

    $('#btnSubmit').click(function() {
        const result = submitForm([checkName], 'categoryForm');

        if(result)
            $(this).addClass('disabled');

        return result;
    });
});
