$(document).ready(function() {
    $('.error-message').hide();
});

let noErrors;

function validateField(field, pattern) {
    if(field.val().match(pattern)) fieldCorrect(field);
    else fieldIncorrect(field);
}

function fieldCorrect(field) {
    $(field).addClass('border-correct');
    $(field).removeClass('border-incorrect');
    $(field).siblings('.error-message').slideUp();
}

function fieldIncorrect(field) {
    if($(field).attr('type') !== 'file') {
        $(field).addClass('border-incorrect');
        $(field).removeClass('border-correct');
    }
    $(field).siblings('.error-message').slideDown();
    noErrors = false;
}

function fieldNeutral(field) {
    $(field).removeClass('border-incorrect');
    $(field).removeClass('border-correct');
    $(field).siblings('.error-message').slideUp();
}

function submitForm(checkFunctions, formId = null, clear = false) {
    noErrors = true;
    for(let f of checkFunctions) {
        f();
    }
    if(noErrors) {
        if(formId && clear) clearForm(formId);
        return true;
    }
    return false;
}

function clearForm(formId) {
    document.getElementById(formId).reset();
    $('.error-message').hide();
    $(`#${formId} .border-correct`).removeClass('border-correct');
    $(`#${formId} .border-incorrect`).removeClass('border-incorrect');
}
