(function(that){


   var myCarousel1 = that.querySelector('#carouselInterval');
   var myCarousel2 = that.querySelector('#carouselInterval2');
 
   const cursor  = that.querySelector('.img-cursor');
   const container_cs = that.querySelector('.col-btnhero');
   const popselector = document.querySelectorAll('.popover-social');
    let lastrangex = '';
 
 
    if(!detectTouchscreen() && detectTouchscreen() === null){
      container_cs.addEventListener('mousemove', e => {
        let y = e.clientY;
        let x = e.clientX;

        cursor.style.left = (y / 2) * -0.2 + 'px';        
        cursor.style.left = (x / 2) * 0.2 + 'px';
        
     });
    }
    selectors();
    that.addEventListener('resize', selectors);


    var carousel = new bootstrap.Carousel(myCarousel1, {
      interval: 4000,
      wrap: true,
      touch: true,
      slide:false,
      pause:'hover'

    })

    var carousel2 = new bootstrap.Carousel(myCarousel2, {
      interval: 4000,
      wrap: true,
      touch: true,
      slide:false,
      pause:'hover'

    })

    carousel.nextWhenVisible();
    carousel2.nextWhenVisible();
 
    myCarousel1.addEventListener('slide.bs.carousel', function () {
      let selector = ifactive('carouselInterval');
      selector.style.opacity= '0';

    });

    myCarousel2.addEventListener('slide.bs.carousel', function () {
      let selector = ifactive('carouselInterval2');
      selector.style.opacity= '0';

    });
  
    myCarousel1.addEventListener('slid.bs.carousel', function () {
      let selector = ifactive('carouselInterval');
      let rangex =  !detectTouchscreen() ?  getRandomInt(0, 50): '0';

          if(!detectTouchscreen() && rangex === lastrangex){
            rangex = getRandomInt(10, 40);
          }

      console.log(selector);
      selector.style.opacity= '0';
       selector.style.left = rangex + '%';

       setTimeout(()=>{
        selector.style.opacity= '1';
       }, 1000)


       lastrangex = rangex;
  });


  myCarousel2.addEventListener('slid.bs.carousel', function () {
    let selector = ifactive('carouselInterval2');
    let rangex =  !detectTouchscreen() ?  getRandomInt(0, 50): '0';

        if(!detectTouchscreen() && rangex === lastrangex){
          rangex = getRandomInt(10, 40);
        }

    console.log(selector);
    selector.style.opacity= '0';
     selector.style.left = rangex + '%';

     setTimeout(()=>{
      selector.style.opacity= '1';
     }, 1000)


     lastrangex = rangex;
});
  
    

      function ifactive(parentid){
        const activecsl = that.querySelector( '#' + parentid + ' .carousel-item.active');



          return activecsl;
          
      }


      function getRandomInt(min, max) {
        return Math.floor(Math.random() * (max - min)) + min;
      }

    function detectTouchscreen() {
      var result = false;
      if (window.PointerEvent && ('maxTouchPoints' in navigator)) {
        // if Pointer Events are supported, just check maxTouchPoints
        if (navigator.maxTouchPoints > 0) {
          result = true;
        }
      } else {
        // no Pointer Events...
        if (window.matchMedia && window.matchMedia("(any-pointer:coarse)").matches) {
          // check for any-pointer:coarse which mostly means touchscreen
          result = true;
        } else if (window.TouchEvent || ('ontouchstart' in window)) {
          // last resort - check for exposed touch events API / event handler
          result = true;
        }
      }
      return result;
    }


  /*boostrap pop overs*/
  function selectors(){
    let popover = "";
  
    for(let i = 0; i < popselector.length; i++ ){
     

      if(detectTouchscreen()){
        popover = new bootstrap.Popover(popselector[i], {});
        popover.disable();

    }else{
      popover = new bootstrap.Popover( popselector[i],{
        trigger: 'hover',
        placement: 'bottom',
        delay: { "show": 500, "hide": 100 },
      });
    }
    }
  }








  

   
    


  
  
    
    

})(document);