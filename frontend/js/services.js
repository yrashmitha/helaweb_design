$("#main").css("display","none");

$(window).on('load',function () {
    $("#navbar-scroll").css("display","none")
    console.log("fully loaded");
    $("#pre").fadeOut();
    $("#main").css("display","block");
    scroll();
})

function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
    document.getElementById("myNav").style.width = "0%";
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
