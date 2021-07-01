$(document).ready(function(){
    var headerArea = $('#header-area');
    var wdw = $(window);
    var btn = $('#btntoggle');
    var lastScrollTop = 0;
   

  

    scrollInit()

 

    

    wdw.on('resize', function(){
      
           if($(this).width() > 992 && 'true' === btn.attr('aria-expanded')){
               if(headerArea.hasClass('cus-nav')){
                 headerArea.removeClass("cus-nav");
                 headerArea.removeClass("fade-in-top")
               }
           }else if($(this).width() <= 992 && 'true' === btn.attr('aria-expanded') ){
             if(headerArea.hasClass('cus-nav')){
                 return;
               }else{
                 headerArea.addClass("cus-nav");
                 headerArea.addClass("fade-in-top")
               }
           }
           
      
     
           
       });



    


// # detect scroll
wdw.on("scroll", function () {
    var scrollTop = $(this).scrollTop();


//detect down or top
if ($(this).scrollTop() > 0 ){
headerArea.addClass("cus-nav")
headerArea.addClass("fade-in-top")
} 
if($(this).scrollTop() === 0 && 'true' === btn.attr('aria-expanded') && $(this).width() > 992){
// console.log( btn.attr('aria-expanded'));
headerArea.removeClass("cus-nav")
headerArea.removeClass("fade-in-top")
}else if($(this).scrollTop() === 0 && 'false' === btn.attr('aria-expanded')){
headerArea.removeClass("cus-nav")
headerArea.removeClass("")
}



});
// # Detect button click
btn.on('click', function(){


      
    addOrRemoveClass(btn);



});





function addOrRemoveClass(aria){
// console.log(wdw.scrollTop(), aria.attr('aria-expanded'));
if('false' === aria.attr('aria-expanded') && wdw.scrollTop() === 0){
    headerArea.removeClass("cus-nav")

}else if('true' === aria.attr('aria-expanded') && wdw.scrollTop() === 0){


headerArea.addClass("cus-nav")
}
}
//# onload functions
function scrollInit(){
    if (wdw.scrollTop() > 0 ){
        if(headerArea.hasClass('cus-nav') === false){
            headerArea.addClass("cus-nav")
        }
        headerArea.addClass("cus-nav")
    } else if(wdw.scrollTop() === 0 && 'false' === btn.attr('aria-expanded')){
            if( headerArea.hasClass('cus-nav')){
                headerArea.removeClass("cus-nav")
            }
    }
 }


 /*owl carousel library*/

 $('.owl-about').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots:false,
    autoplay:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});


$('.owl-tips').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots:false,
    autoplay:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})


/* AOS animations library*/
AOS.init();


           
       });

