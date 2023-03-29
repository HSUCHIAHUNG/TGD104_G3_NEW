// ==== 輪播 ====
$(document).ready(function(){
    $('.autoplay').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive:[
            {breakpoint:1200,settings:{
              slidesToShow:3,
            }},
            {breakpoint:820,settings:{
              slidesToShow:2,
            }},
            {breakpoint:428,settings:{
              slidesToShow:1,
            }},
          ],
      });
  });



