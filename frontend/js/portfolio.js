$("#main").css("display","none");

$(window).on('load',function () {
    get_projects();
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



function get_projects() {

    var ajaxConf={
        url:"http://127.0.0.1:8000/api/projects",
        dataType:"json",
        method:"GET"
    }

    $.ajax(ajaxConf).done(function (res) {



        res.data.forEach(function (i) {
            console.log(i)


            var path=i.cover_path;
            var name =i.name;
            var url=i.url;
            var src="http://127.0.0.1:8000/storage"+path.split("public",2)[1]
            console.log(src);
            console.log(path);



            $("#projects-render").append("<div class=\"col-12 col-md-6 col-lg-4\">\n" +
                "                    <div class=\"text-center portfolio-item\">\n" +
                "                        <img id=\"pro\" src=\""+src+"\" height=\"300px\" alt=\""+name+"\" class=\"portfolio-image\">\n" +
                "                        <h4>"+name+"</h4>\n" +
                "                        <h6><a href=\""+url+"\" target='_blank'>Visit</a></h6>\n" +
                "\n" +
                "                    </div>\n" +
                "                </div>");


        })


    })

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
