var slider;

$(function() {
    slider = $('#slide_qa').bxSlider({
        controls: true,
        minSlides: 1,
        maxSlides: 1,
        slideMargin: 0,
        nextSelector: '#slider-next',
        prevSelector: '#slider-prev',
        nextText: '次へ',
        prevText: '前へ',
        pager: true,
        pagerCustom: '#bx-pager',
        infiniteLoop: false,
        onSliderLoad: function() {
            init();

        },
        onSlideBefore: function ($slideElement, oldIndex, newIndex) {
            custom_slide();
        },
        onSlideNext: function($slideElement, oldIndex, newIndex) {
            clickNext();
            $('.slide').removeClass('active');
            $($slideElement).addClass('active'); 
        },
        onSlidePrev: function($slideElement, oldIndex, newIndex) {
            $('.slide').removeClass('active');
            $($slideElement).addClass('active'); 
            clickPrev();
        }
    });

    // init: go to current step 
    var currentStep = localStorage.getItem('step'),
        slideStep = 0;

    if(currentStep=='start') {
        slideStep = 0;
    } else {
        var numGet = currentStep.slice(-2);
        slideStep = Number(numGet) - 1;
    }
    slider.goToSlide(slideStep); 

});
$(document).ready(function() {
    "use strict";
    $('.btn_ques01').click(function() {
        $("#modal_quiz_out").fadeIn("");
        slider.reloadSlider();
    });
    $('#btn_close').click(function() {
        $("#modal_quiz_out").fadeOut("");
    });
});


$(document).ready(function() {

    var hash = location.hash;
    if (hash) {

        //alert(hash);
        $("#modal_quiz_out").fadeIn("");
        slider.reloadSlider({
            controls: true,
            startSlide: 11,
            minSlides: 1,
            maxSlides: 1,
            slideMargin: 0,
            nextSelector: '#slider-next',
            prevSelector: '#slider-prev',
            nextText: '次へ',
            prevText: '前へ',
            pager: true,
            pagerCustom: '#bx-pager',
            infiniteLoop: false,
            onSliderLoad: function() {
                custom_slide();
            },
            onSlideBefore: function() {
                custom_slide();
            }
        });
    } //end if

});

function custom_slide() {
    var current = slider.getCurrentSlide();
    //alert();
    var total = slider.getSlideCount();
    var percent = (current + 1) * 100 / total;
    var percent_remaining = 100 - percent;
    $('.progress-bar').css('width', percent + '%');
    $('.progress-bar_remaining ').css('width', percent_remaining + '%');

    $("#txt_number_answered").html(current + 1);
	 if (current + 1 ===1) {
        $("#slider-prev").hide();
    } else {
        $("#slider-prev").show();
    }
	//txt_number_remaining
    var txt_number_remaining = total - (current + 1);
    $("#txt_number_remaining").html(txt_number_remaining);
    if (txt_number_remaining === 0) {
        $("#number_remaining").hide();
    } else {
        $("#number_remaining").show();
    }

}
/* Funcs: Customize with Local Storage
-----------------------------------------------------------------*/
var $win,
    quiz = $('.slide'),
    lengthQuiz = quiz.length;    

//init();


function init() {
    checkItem();
    initLocalStorage();
    showResult();  
}

/**
*** func: checkbox selected
**/
function checkItem() {
    $('.slide').each(function() {
        var
            thisQuiz = $(this).attr('id'),
            quest = $(this).find('.question_txt span').text(),
            thisChecks = "#"+ thisQuiz + " input[name='favorite']";

        
        $(thisChecks).change(function () {
            var 
              answers = {},
              items =  $(thisChecks);
          
            // 01.get value of checked item    
            $.each(items,function(index,item){
              if($(item).prop('checked')) {
                var $keyItem = $(item).val();
                answers[$keyItem] = $(item).next().text();
              }
            });
          
            // 02.store value
            var thisChecked = thisQuiz+'-data',
                thisAnswer = {question: quest, answer: answers };
            localStorage.setItem(thisChecked,JSON.stringify(thisAnswer));
            console.log(localStorage.getItem(thisChecked));   
        });
              
          

    });
}

/**
*** func: get/keep current step if click next or refresh page
**/
function saveStorage(nextID) {
    //get current id of question
    var currentItem = localStorage.getItem('step'),
        currentEQ = checkCurrent();

    checkItem();
    if($('.slide').eq(currentEQ).hasClass('active')){
      var quizID = $('.slide').eq(nextID).attr('id');
      localStorage.setItem('step', quizID);
    }

    if(currentItem==null) {
      localStorage.setItem('step','start');
    }
}

/**
*** func: check Current
**/
function checkCurrent() {
    var currentEQ;
    $('.slide').each(function(index, el) {
      if($('.slide').eq(index).hasClass('active')) {
        currentEQ = index;
      }
    });

    return currentEQ;
}

/**
*** func: click to Next
**/
function clickNext() {
    var currentEQ = checkCurrent();

    // 01.go to next quiz
    if(currentEQ !== $('.slide').length - 1) {
      saveStorage(currentEQ+1);
    }
    
    // 02.check if end of quiz
    if(currentEQ == $('.slide').length - 1 ) {
      localStorage.setItem('step','end');
      $('.slide').eq(currentEQ).removeClass('active');
      //$('#final').addClass('active');
    } 
    // showResult();
}

/**
*** func: click to Prev
**/
function clickPrev() {
    var currentEQ = checkCurrent();

    // 01.go to prev quiz
    if(currentEQ !== 0) {
      saveStorage(currentEQ-1);
    }
    
    // 02.check if end of quiz then back to previous
    var currentItem = localStorage.getItem('step'),
        quizID = quiz.eq(quiz.length-1).attr('id');
    
    if (currentItem == 'end') {
      // $('#final').removeClass('active');
      localStorage.setItem('step',quizID);
      saveStorage(currentEQ);
    }
}

/**
*** func: init LocalStorage
**/
function initLocalStorage() {
    
    //step 1: load current step at the first
    var stepData = localStorage.getItem('step');
    if(stepData === null || stepData === 'start') {
      localStorage.setItem('step','start');
    } else if(stepData == 'end') {
      //$('#final').addClass('active');
    } else {}

    //step 2: load answer data to all question
    for(var i = 1 ; i < $('.slide').length + 1; i++) {
      var getQues = 'ques0'+ i + '-data',
          quesData = JSON.parse(localStorage.getItem(getQues));
      
      var thisChecks = "#ques0"+ i + " input[name='favorite']",
          items =  $(thisChecks);

      if(quesData!==null) { //if localStorage has data
        var question = quesData.question,
            answers = quesData.answer;
          for(var key in answers){
            $.each(items,function(index,item){
              if($(item).val()==key){
                $(item).prop('checked', true);
              }
            });
            
          }
      } else { //if localStorage doesn't have data
        var answers = {};
        $.each(items,function(index,item){
          if($(item).is(':checked')) {
            var $keyItem = $(item).val();  
            answers[$keyItem] = $(item).next().text();
          }
        });
        var ques = '#ques0'+ i,
            quest = $(ques).find('.question_txt span').text();
            null_data = {question: quest, answer: answers };

        localStorage.setItem(getQues,JSON.stringify(null_data));
      }
    }

}

/**
*** func: show result - format HTML here
**/
function showResult() {
    console.log('show Result'); 
}