$(document).ready(() => {
    // scrollTop
    $("body").append(`<div id="scrollTop">
    <a href="#" class="d-flex align-items-center justify-content-center rounded-circle shadow">
        <i class="fas fa-arrow-up font-small"></i>
    </a>
</div>`);

    $(window).scroll(displayScrollTopBtn);

    $("#scrollTop").hide();
    displayScrollTopBtn();

    function displayScrollTopBtn() {
        if($(window).scrollTop() > $("#header .container").outerHeight()) {
            $("#scrollTop").fadeIn("fast");
        } else {
            $("#scrollTop").fadeOut("fast");
        }
    }

    $("#scrollTop a").click(function(e) {
        e.preventDefault();

        $("html, body").animate({
            scrollTop: $("html").offset().top
        }, 500, "easeInOutExpo");
    });

    // csrf
    const token = $('meta[name="csrf-token"]').attr('content');

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': token
        }
    });
});

const base_url = window.location.origin;

async function ajaxCallback(fileName, method = 'GET', data = {}) {
    let returnValue = null;

    await $.ajax({
        url: fileName,
        method: method,
        dataType: 'json',
        data: data,
        success: data => {
            returnValue = data;
        },
        error: err => {
            console.error(err.responseText);
        }
    });

    return returnValue;
}
