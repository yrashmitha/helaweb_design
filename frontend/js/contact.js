$("#main").css("display", "none")
$("#submitting-btn").css("display", "none")

$(window).on('load', function () {
    console.log("fully loaded");
    $("#pre").css("display", "none")
    $("#main").css("display", "block")
    scroll();

    // $("#main").css("display","block");
})
$("#form-submit").click(function () {

    let email = $("#email").val();
    let tel = $("#tel").val();
    let subject = $("#subject").val();
    let message = $("#message").val();
    let name = $("#name").val();

    console.log(email.length)

    let validForm = false;

    if (email.length === 0) {
        // $("#email-err").remove();
        $("#email-err").text("Enter Email");
        validForm = false;
    }

    let ve=validateEmail(email);
    let vt=validateTel(tel);
    let vn=validateName(name);
    let se=validateSubject(subject);
    let mv=validateMessage(message);

    if (ve && vt && vn && se && mv) {
        validForm = true;
    }


    if (validForm === true) {

        $("#form-submit").css("display", "none");
        $("#submitting-btn").css("display", "block");

        var form = $("#contact-form").serialize();

        $ajax = {
            url: "http://127.0.0.1:8000/api/contact",
            data: form,
            method: "POST",
            dataType: "json"
        }
        $.ajax($ajax).done(function (res) {
            $("#submitting-btn").css("display", "none")
            $("#form-submit").css("display", "block")

            if (res === 1) {
                $("#contact-form").append("<div class=\"mt-3 alert alert-success\" role=\"alert\">\n" +
                    "  The form was sent successfully. We will call you soon.\n" +
                    "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">\n" +
                    "    <span aria-hidden=\"true\">&times;</span>\n" +
                    "  </button>" +
                    "</div>")
            } else {
                $("#contact-form").append("<div class=\"mt-3 alert alert-danger\" role=\"alert\">\n" +
                    "  Some error occurred!\n" +
                    "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">\n" +
                    "    <span aria-hidden=\"true\">&times;</span>\n" +
                    "  </button>" +
                    "</div>")
            }

            $("#contact-form").trigger('reset');
            validForm = false;

        })
    }


})

function validateEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (regex.test(email)) {
        $("#email-err").remove();
        return 1;
    } else {
        $("#email-err").text("");
        $("#email-err").text("Email is not valid");
        return 0;
    }

}


function validateTel(tel) {
    let x = 0;
    if (tel.length === 0 || tel.length < 10) {
        // $("#tel-err").remove();
        console.log("ba")
        $("#tel-err").text("Mobile number is not valid");
    } else {
        $("#tel-err").remove();
        x = 1;
    }
    return x;
}

function validateName(name) {

    let x = 0;
    if (name.length === 0) {
        $("#name-err").text("Enter name");
    } else {
        $("#name-err").remove();
        x = 1;
    }
    return x;
}

function validateSubject(sub) {
    let x = 0;
    if (sub.length === 0) {
        $("#sub-err").text("Enter subject");
    } else {
        $("#sub-err").remove();
        x = 1;
    }
    return x;
}
function validateMessage(msg) {
    let x = 0;
    if (msg.length === 0) {
        $("#msg-err").text("Enter message");
    } else {
        $("#msg-err").remove();
        x = 1;
    }
    return x;
}
function scroll() {
    var lastScrollTop = 0;
    $(window).scroll(function(event){
        console.log(event)
        var st = $(this).scrollTop();
        if (st > lastScrollTop){
            // downscroll code
            $("#scroll-to-top").css("opacity","0.2")
        } else {
            // upscroll code
            console.log("up")
            $("#scroll-to-top").css("opacity","1")
        }
        lastScrollTop = st;
    });
}
