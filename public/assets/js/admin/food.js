$(document).ready(() => {
    const pricePattern = /^(?=.+)(?:[1-9]\d*)?(?:(\.\d+)|(0\.\d*[1-9]+\d*))?$/;

    const nameField = $('#name');
    function checkName() {
        if(nameField.val() === '') {
            fieldIncorrect(nameField)
        } else {
            fieldCorrect(nameField);
        }
    }

    const imageField = $('#image');
    function checkImage() {
        if(!edit) {
            if(imageField.val() === '') {
                fieldIncorrect(imageField);
            } else {
                fieldCorrect(imageField);
            }
        }
    }

    const priceField = $('#price');
    function checkPrice() {
        validateField(priceField, pricePattern);
    }

    nameField.blur(checkName);
    imageField.on('input', checkImage);
    priceField.blur(checkPrice);

    $('#btnSubmit').click(function() {
        const result = submitForm([checkName, checkImage, checkPrice], 'foodForm');

        if(result)
            $(this).addClass('disabled');

        return result;
    });
});
