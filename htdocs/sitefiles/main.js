    
    $(document).ready(function(){
        $("label.active").click(function(){
            var e = this;
            if ($(e).parent().parent().siblings().first().css("display") === "none") {
                $(e).removeClass("activated");
                $(e).addClass("active");
                $(e).parent().siblings("div").children("section").slideUp(function(){
                    $(e).parent().parent().siblings().slideDown();
                });
                $(e).parent().siblings("div").children("section").find("section").slideUp();
                $(e).parent().siblings("div").children("section").find("label.activated").removeClass("activated");
                $(e).parent().siblings("div").children("section").find("label").not(".inactive").addClass("active");
            } else {
                $(e).removeClass("active");
                $(e).addClass("activated");
                $(e).parent().parent().siblings().slideUp(function(){
                    $(e).parent().siblings("div").children("section").slideDown();
                });
            }
        });
    });
    $(document).ready(function(){
        var opacval = "0.2";
        $("#map").css("opacity", opacval);
        var el = $("#mapcontainer");
        el.mouseenter(function(){
            //el.animate({top: '150px', height: '400px', width: '600px'});
            $("#map").animate({opacity: '1.0'});
        });
        el.mouseleave(function(){
            //el.animate({top: '250px', height: '200px', width: '300px'});
            $("#map").animate({opacity: opacval});
        });
    });
    $(document).ready(function(){
        $("body").append('<script async defer src="' + getu() + '"></script>');
        holdon();
        towerofhanoi();
        $("#hanoi").click(function(){
            movethetower();
        });
    });

    function getu() {
        return "https://maps.googleapis.com/maps/api/js?key=AIzaSyBz5XWQRYafwQ-NtgS3S6v_VTAXqKTLmMU&callback=initMap";
    } // end getu