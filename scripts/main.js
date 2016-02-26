$(document).ready(function(){
   
        $(window).scroll(function() {
            var scroller = $(window).scrollTop();
            if (scroller < 600) {
                maxHeight = 300;
                $('.sl1').animate({
                    opacity:1,
                },1500);
                $('.sr1').animate({
                    opacity:1,
                },1500);
            } else if (scroller < 900) {
                maxHeight = 600;
                $('.sl2').animate({
                    opacity:1
                },1500);
                $('.sr2').animate({
                    opacity:1
                },1500);
            } else if (scroller < 1200) {
                maxHeight = 900;
                $('.sl3').animate({
                    opacity:1
                },1500);
                $('.sr3').animate({
                    opacity:1
                },1500);
            } else if (scroller < 1500) {
                maxHeight = 1200;
                $('.sl4').animate({
                    opacity:1
                },1500);
                $('.sr4').animate({
                    opacity:1
                },1500);
            } else{
                maxHeight: 2500;
            }
            $('.line').css({
                'height': maxHeight + "px"
             });
            
            
        });
});