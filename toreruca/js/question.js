var slider,
    question_url = 'http://toreruca.com/question/';

$(function() {
  slider = $('#slide_qa').bxSlider({
    touchEnabled: false,
    controls: true,
    minSlides: 1,
    maxSlides: 1,
    slideMargin: 0,
    // nextSelector: '#slider-next',
    prevSelector: '#slider-prev',
    nextText: '次へ',
    prevText: '前へ',
    pager: true,
    pagerCustom: '#bx-pager',
    infiniteLoop: false,
    onSliderLoad: function() {
      init();
    },
    onSlideBefore: function() {
      custom_slide();
    },
    onSlideAfter: function() {
      change_hash();
    },
    onSlideNext: function($slideElement, oldIndex, newIndex) {
      clickNext();
      $('.slide').removeClass('active');
      $($slideElement).addClass('active');
    },
    onSlidePrev: function($slideElement, oldIndex, newIndex) {
      clickPrev();
      $('.slide').removeClass('active');
      $($slideElement).addClass('active');
    }
  });
  custom_slide();
});

/**
*** func: change hash
**/
function change_hash() {
  var stepData = localStorage.getItem('step');
  window.location.hash = stepData;
  var question_dest = question_url + '#' + stepData;
  history.pushState(null, null, question_dest);
}
/**
*** func: customize popup Slider
**/
$(document).ready(function() {
  "use strict";

  //load first
  window.history.replaceState(null, null, "http://toreruca.com/"); 

  $('.open_quiz').click(function() {
      $("#modal_quiz_out").fadeIn("fast");
      slider.reloadSlider();
      change_hash();
      // init: go to current step 
      var currentStep = localStorage.getItem('step'),
          slideStep = 0;
      if(currentStep=='start') {
          slideStep = 0;
      } else {
          var numGet = currentStep.slice(-2);
          slideStep = Number(numGet) - 1;
          slider.goToSlide(slideStep);
      }
  });

  $('#btn_close').click(function() {
    $("#modal_quiz_out").fadeOut("");
    window.history.replaceState(null, null, "http://toreruca.com/"); 
  });
});

function custom_slide() {
    var current = slider.getCurrentSlide();
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

/* Functions: Customize with Local Storage
-----------------------------------------------------------------*/
var $win,
    quiz = $('.slide'),
    lengthQuiz = quiz.length;    

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
        thisChecks = "#"+ thisQuiz + " input";

    
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
*** func: add action before Next transition
**/
function clickNext() {
  var currentEQ = checkCurrent();
  
  // 01.save next step to local Storage
  if(currentEQ !== $('.slide').length - 1) {
    saveStorage(currentEQ+1);
  }
  // 02.check if end of quiz
  if(currentEQ == $('.slide').length - 1 ) {
    localStorage.setItem('step','end');
    $('.slide').eq(currentEQ).removeClass('active');
  }
  // 03.change status of div view 
  checkProgress();
}

/**
*** func: add action before Prev transition
**/
function clickPrev() {
  var currentEQ = checkCurrent();
  
  // 01.save prev step to local Storage
  if(currentEQ !== 0) {
    saveStorage(currentEQ-1);
  }
  
  // 02.check if end of quiz then back to previous
  var currentItem = localStorage.getItem('step'),
      quizID = quiz.eq(quiz.length-1).attr('id');
  
  if (currentItem == 'end') {
    localStorage.setItem('step',quizID);
    saveStorage(currentEQ);
  }
  checkProgress();
}

/**
*** func: check Progress of Quiz
**/
function checkProgress() {
  var stepData = localStorage.getItem('step'),
      formStatus = localStorage.getItem('send');

  if(stepData == 'start') {
    $('.startquiz').addClass('active');
    $('.inprogress').removeClass('active');
    $('.endquiz').removeClass('active');
  } else if(stepData == 'end') {
    $('.endquiz').addClass('active');
    $('.startquiz').removeClass('active');
    $('.inprogress').removeClass('active');

    if(formStatus == 'done') {
      $('.frm-fields').addClass('disable');
      $('#reset-quiz').addClass('active');
      $('.title_thanks').addClass('active');
      $('.thankyou_mess').addClass('active');
      $('.title_contact').removeClass('active');
    } else {
      // Thank you page
      $('.title_contact').addClass('active');
      $('.title_thanks').removeClass('active');
      $('.thankyou_mess').removeClass('active');
    }
  } else {
    $('.inprogress').addClass('active');
    $('.startquiz').removeClass('active');
    $('.endquiz').removeClass('active');
  }
}

/**
*** funcs: event functions for buttons
**/
/* event func: check button - go to next */
$('#slider-check').on("click",function(){
  var curEQ = checkCurrent(),
      stepData = localStorage.getItem('step'),
      numGet = stepData.slice(-2),
      slideStep = Number(numGet) - 1;
  
  // check at least one checkbox is checked
  if($('.slide').eq(curEQ).find("input:checked").length > 0 ) {
    $('#notification').removeClass('active');
    if(slideStep == (lengthQuiz-1)) {
      localStorage.setItem('step','end');
      $('.endquiz').addClass('active');
      $('.inprogress').removeClass('active');
      showResult();
      //set hash
      var endStep = localStorage.getItem('step');
      window.location.hash = endStep;
    } else {
      slider.goToNextSlide();
    }
  } else {
    $('#notification').addClass('active');
  }
});

//check if hash is changed
$(window).bind('hashchange', function() {
  //var newhash = window.location.hash.substring(1); // it gets id of clicked element
  //window.history.replaceState(null, null, "http://toreruca.com/");
});

/* event func: start button - go to quiz */
$('#start-now').on("click", function() {
  localStorage.setItem('step','ques01');
  //set hash
  // var startStep = localStorage.getItem('step');
  // window.location.hash = startStep;

  checkProgress();
  slider.reloadSlider();
//  change_hash();

  var stepData = localStorage.getItem('step');
  window.location.hash = stepData;
  var question_dest = question_url + '#' + stepData;
  history.pushState(null, null, question_dest);
});

/* event func: end button - go to contact form */
$('#reset-quiz').on("click", function() {
   localStorage.setItem('step','start');
   localStorage.setItem('send','notyet');

   $(this).removeClass('active');
   $('.frm-fields').removeClass('disable');
   $('div.wpcf7-mail-sent-ok').css('display','none');

  //restore status
  checkProgress();
  resetLocalStorage();
  slider.reloadSlider();
  custom_slide();

  //set hash
  var startStep = localStorage.getItem('step');
  window.location.hash = startStep;
});

/**
*** func: init LocalStorage
**/
function initLocalStorage() {
    
  //step 1: load current step at the first
  var stepData = localStorage.getItem('step');
  if(stepData === null || stepData == 'start') {
    localStorage.setItem('step','start');
    $('.slide').eq(0).addClass('active');
  } else if(stepData == 'end') {
    //...
  } else {
    var numGet = stepData.slice(-2);
        slideStep = Number(numGet) - 1;

    $('.slide').each(function(index, el) {
      if(index == slideStep) {
       $('.slide').eq(index).addClass('active');
      }
    });
  }

  //step 2: load answer data to all question
  for(var i = 1 ; i < $('.slide').length + 1; i++) {
    var order = '';
    if(i<=9) {
      order = 'ques0';
    } else {
      order = 'ques';
    }
    var getQues = order + i + '-data',
        quesData = JSON.parse(localStorage.getItem(getQues));
    
    var thisChecks = "#" + order + i + " input",
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
      var ques = '#'+ order + i,
          quest = $(ques).find('.question_txt span').text();
          null_data = {question: quest, answer: answers };

      localStorage.setItem(getQues,JSON.stringify(null_data));
    }
  }
  checkProgress();
}

/**
*** func: reset LocalStorage
**/
function resetLocalStorage() {
  $('.slide').each(function(index, el) {
    $('.slide').eq(index).removeClass('active');
  });
  
  $('.slide').eq(0).addClass('active');
  var currentEQ = checkCurrent();

  //reset all local Storage
  for(var i = 1 ; i < $('.slide').length + 1; i++) {
    var order = '';
    if(i<=9) {
      order = 'ques0';
    } else {
      order = 'ques';
    }
    var getQues = order + i + '-data',
        quesData = JSON.parse(localStorage.getItem(getQues));
    
    var thisChecks = "#" + order + i + " input",
        items =  $(thisChecks);

      var answers = {};
      $.each(items,function(index,item){
        if($(item).is(':checked')) {
          $(this).prop('checked', false);
        }
      });
      var ques = '#' + order + i,
          quest = $(ques).find('.question_txt span').text(),
          null_data = {question: quest, answer: answers };

      localStorage.setItem(getQues,JSON.stringify(null_data));
  }

}

/**
*** func: show result - format HTML here
**/
function showResult() {
  
  for(var i = 1 ; i < lengthQuiz + 1; i++) {
    var order = '';
    if(i<=9) {
      order = 'ques0';
    } else {
      order = 'ques';
    }
    var result = '';
    var getQues = order + i + '-data';
    var quesData = JSON.parse(localStorage.getItem(getQues));
    if(quesData!==null) {
      var 
        question = quesData.question,
        answers = quesData.answer;
      
      var thisQuestion = "#question-"+ i,
          chooseThis =  $(thisQuestion);
      for(var key in answers) {
        if(result=='') {
          result += answers[key];
        } else {
          result += ' ・' + answers[key];
        }
      }
      chooseThis.val(result);
    }
  }
}

$(document).on('mailsent.wpcf7', function () {
  $('.frm-fields').addClass('disable');
  $('#reset-quiz').addClass('active');
  localStorage.setItem('send', 'done');
});