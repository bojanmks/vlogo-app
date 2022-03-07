$(document).ready(() => {
    // sidenav
    $("#sideNav").hide();
    $("#sidenavCover").hide();

    $("#hamburgerMenu a, #sidenavCover").click(function(e) {
        e.preventDefault();

        $("#sideNav").slideToggle("fast");
        $("#sidenavCover").fadeToggle("fast");
    });

    // user div
    $('#userHoverMenu').hide();

    $(window).click(() => {
        $('#userHoverMenu').slideUp("fast");
    });

    $('.user-div').click((e) => {
        e.stopPropagation();
        $('#userHoverMenu').slideToggle("fast");
    });
});
