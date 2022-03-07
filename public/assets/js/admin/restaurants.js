$(document).ready(() => {
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

    nameField.blur(checkName);
    imageField.on('input', checkImage);

    $('#btnSubmit').click(function() {
        const result = submitForm([checkName, checkImage], 'restaurantForm');

        if(result)
            $(this).addClass('disabled');

        return result;
    });
});
