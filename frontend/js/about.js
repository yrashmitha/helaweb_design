$("#main").css("display","none")

$(window).on('load',function () {
    console.log("fully loaded");
    $("#pre").css("display","none")
    $("#main").css("display","block")
    scroll();

    // $("#main").css("display","block");
})
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
