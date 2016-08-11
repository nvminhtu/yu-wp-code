$(document).ready(function(){
  Slider();
  var hash = location.hash;
  if(hash){
    //alert(hash);
    $(hash).trigger("click");
  }
}); 
function Slider(){
  

    var slider =  $('#slide_qa').bxSlider({
    controls: true,
  
    minSlides: 1,
    maxSlides: 1,
    slideMargin: 0,
    nextSelector: '#slider-next',
    prevSelector: '#slider-prev',
    nextText: 'æ¬¡ã¸',
    prevText: 'å‰ã¸',
     pagerCustom: '#bx-pager',
     infiniteLoop: false,
    /*onSliderLoad: function(){           
        slide01();
    },
    onSlideNext: function(){            
        var current = slider.getCurrentSlide();
        //alert(current);
        if( current ==1){       
        }
        
   }*/
   onSlideBefore: function(currentSlideNumber, totalSlideQty, currentSlideHtmlObject) {
    // alert(totalSlideQty);
      var total = slider.getSlideCount();
      var percent = (currentSlideHtmlObject+1)*100/total;
    //  console.log(currentSlideHtmlObject);
      //var progressLength = (currentSlideHtmlObject +1) * 16.8 + '%';
      
      //$('.progress-bar ').css('width','calc(15px + ' + progressLength + ')');
      $('.progress-bar ').css('width',percent+'%');
    }
      
  
      
    
    });
  
}
/*function slide01(){ 
  $('.logo_slider01').delay(600).animate({"opacity":1},800);
    setTimeout(function(){
       $(".logo_slider01").addClass("run_logo01");
     }, 2000);  
  $('.slide01').delay(3000).animate({"opacity":1},800); 
  $('.slide01_circle01').delay(4800).animate({"opacity":1},800);  
  $('.slide01_circle02').delay(5600).animate({"opacity":1},800);  
  //$('.main_txt01').delay(6600).animate({"opacity":1},800);
  $('.main_txt01 .main_txt_inner').delay(6600).animate({width:"100%"},2000);

}*/