$(document).ready(function () {
    const newsletterForm = $("#newsletterForm");
    const contactForm = $("#contactForm");
    $("#modalRegisterForm").click(function() {
        console.log('click');
    });

    $("#newsletterBtn").on('click', function() {
        console.log('click');

        var _token = newsletterForm.children("input[name='_token']").val();
        var first_name = newsletterForm.children("input[name='first_name']").val();
        var last_name = newsletterForm.children("input[name='last_name']").val();
        var email = newsletterForm.children("input[name='email']").val();
        console.log(first_name);
        console.log(email);
        $.ajax({
            url: "/contact/newsletter-signup",
            type: 'POST',
            data: {_token: _token, first_name: first_name, last_name: last_name, email: email},
            success: function(data) {
                $.each(data.errors, function(key, value) {
                    printErrorMsg(value);
                })
            }
        });
    });

    function printErrorMsg(msg) {
        let print = $(".print-error-msg");
        print.find("ul").html('');
        print.css('display', 'block');
        $.each(msg, function(key, value) {
            print.find("ul").append('<li>'+value+'</li>');
        });
    }
});

