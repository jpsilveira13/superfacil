    $(document).ready(function(){
        $(window).scroll(function(){
            if ($(this).scrollTop() > 150){
                $('#topbar').stop().animate({"top": 0});
            } else {
                $('#topbar').stop().animate({"top": "-60px"});
            } 
        });
    });