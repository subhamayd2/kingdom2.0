$('ul.nav li.dropdown').hover(function () {
    $(this).find('.dropdown-menu').stop(true, true).delay(100).slideDown(300);
}, function () {
    $(this).find('.dropdown-menu').stop(true, true).delay(100).slideUp(300);
});

$(document).ready(function () {
    $(window).load(function () {
        $(".page-load").fadeOut(1500);
    });



    $("#init-popup-form").on('submit', function (e) {
        e.preventDefault();

        var name = $("#init-popup-form .name").val();
        var email = $("#init-popup-form .email").val();
        var subject = $("#init-popup-form .subject").val();
        var message = $("#init-popup-form .message").val();

        $("#contact-form-submit").text("Sending...");

        $.ajax({
            type: 'POST',
            url: 'http://localhost/kingdom2.0/php/contact.php',
            data: {
                name: name,
                email: email,
                subject: subject,
                message: message
            },
            success: function (result) {
                var s = result.toString();
                if (s == 1) {
                    $("#contact-form-submit").text("Successfully Sent");
                } else {
                    $("#contact-form-submit").text("Error. Please try again.");
                }
            }
        })
    });

});