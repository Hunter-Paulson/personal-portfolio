$(window).scroll(function() {

    //Determine if the scroll to top button should appear
    let height = $(window).scrollTop();

    if (height > 100) {
        $('#back2Top').fadeIn();
    } else {
        $('#back2Top').fadeOut();
    }
});

$(document).ready(function() {

    //Sctivate the slow scroll to top
    $("#back2Top").click(function(event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });
});