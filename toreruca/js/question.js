var slider,
    question_url = 'http://toreruca.com/question/';

$(window).load(function() {
  var href = window.location.href;
  var n = href.search("/contact/");
  var n2 = href.search("/question/");
  var isContact,
      isQuestion;

  //check is contact page
  if(n!="-1") {
    isContact = true;
  } else {
    isContact = false;
  }

  //check is question page
  if(n!="-1") {
    isQuestion = true;
  } else {
    isQuestion = false;
  }


  var finished = localStorage.getItem('finished');
  if(finished=='xongroi' && isContact==true && isQuestion == true) {
    //do sthing
    //localStorage.removeItem('finished');

  } else {
    resetLocalStorage();
    localStorage.removeItem('finished');
    localStorage.removeItem('step');
  }

});
$(function() {
  slider = $('#slide_qa').bxSlider({
    touchEnabled: false,
    controls: true,
    minSlides: 1,
    maxSlides: 1,
    slideMargin: 0,
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
	  //set auto focus
	 // alert(newIndex);
	 if(newIndex==13){
		// $("#fa-14").focus();
		}
    },
    onSlidePrev: function($slideElement, oldIndex, newIndex) {
      clickPrev();
      $('#notify-textarea').removeClass('active');
      $('#notify-checkbox').removeClass('active');
      $('#notify-radio').removeClass('active');
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
  var stepData = localStorage.getItem('step'),
      question_dest = question_url + '#' + stepData;

  window.location.hash = stepData;
  history.pushState(null, null, question_dest);
}

/**
*** func: customize popup Slider - Ready function
**/
$(document).ready(function() {
  "use strict";

  $('.open_quiz').click(function() {
      $("#modal_quiz_out").fadeIn("fast");
	  $("#wrapper").addClass("fixed");

      slider.reloadSlider();

      // init: go to current step
      var currentStep = localStorage.getItem('step'),
          slideStep = 0;
      if(currentStep=='end') {

      }
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
	$("#wrapper").removeClass("fixed");
    //slider.reloadSlider();
    //window.history.replaceState(null, null, "http://toreruca.com/");
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
        thisChecks = "#"+ thisQuiz + " input",
        thisSelected = "#" + thisQuiz + " select",
        thisText = "#"+ thisQuiz + " input[type='text']";

    // ---case: select ---------------------------------------
    $(thisSelected).change(function(){
      var
        answers = {},
        $keyItem = $(this).find(":selected").val(),
        selectedVal = $(this).find(":selected").text();

      // 01.get value of seleted box
      answers[$keyItem] = selectedVal;

      // 02.store value
      var thisChecked = thisQuiz+'-data',
          thisAnswer = {question: quest, answer: answers };
      localStorage.setItem(thisChecked,JSON.stringify(thisAnswer));
    });

    // ---case: checkboxes ---------------------------------------
    $(thisChecks).change(function(){
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

    // ---case: textarea ---------------------------------------
    $(thisText).change(function() {
      var
        answers = {},
        items =  $(thisText);

      // 01.get value of seleted box
      $.each(items,function(index,item){
        var $keyItem = $(item).attr('id');
        answers[$keyItem] = $(item).val();
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
  if(currentEQ == $('.slide').length) {
    localStorage.setItem('finish','roi');
    //$('.slide').eq(currentEQ).removeClass('active');
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
    //localStorage.setItem('step',quizID);
    saveStorage(currentEQ);
  }
  checkProgress();
}

/**
*** func: check Progress of Quiz
**/
function checkProgress() {
  var stepData = localStorage.getItem('step');

  if(stepData == 'start') {
    $('.startquiz').addClass('active');
    $('.inprogress').removeClass('active');
  } else {
    if(stepData == 'ques01') {
      $('#slider-back').addClass('active');
    } else {
      $('#slider-back').removeClass('active');
    }
    $('.inprogress').addClass('active');
    $('.startquiz').removeClass('active');
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

  // 01.check type of inputs
  var findInput = '';
  if($('.slide').eq(curEQ).find("input[type='checkbox']").length > 0 ) {
    findInput = 'hasCheckbox';
  } else if($('.slide').eq(curEQ).find("input[type='radio']").length > 0 ){
    findInput = 'hasRadio';
  } else if($('.slide').eq(curEQ).find("select").length > 0 ){
    findInput = 'hasSelect';
  } else if($('.slide').eq(curEQ).find("input[type='text']").length > 0 ){
    findInput = 'hasText';
  } else { }

  // 02.check which type?
  if(findInput == 'hasCheckbox') {
    // check at least one checkbox is checked
    if($('.slide').eq(curEQ).find("input[type='checkbox']:checked").length > 0 ) {
      $('#notify-checkbox').removeClass('active');
      next_slide();
    } else {
      $('#notify-checkbox').addClass('active');
    }
  } else if(findInput == 'hasRadio') {
    if($('.slide').eq(curEQ).find("input[type='radio']:checked").length > 0 ) {
      $('#notify-radio').removeClass('active');
      next_slide();
    } else {
      $('#notify-radio').addClass('active');
    }
  } else if(findInput == 'hasSelect') {
    if($('.slide').eq(curEQ).find("select option:selected").length > 0 ) {
      $('#notify-select').removeClass('active');
      next_slide();
    } else {
      $('#notify-select').addClass('active');
    }
  } else if(findInput == 'hasText') {
    var content = $.trim($('.slide').eq(curEQ).find("input[type='text']").val());
    if(content.length == 0) {
      $('#notify-textarea').addClass('active');
    } else {
      $('#notify-textarea').removeClass('active');
      next_slide();
    }
  } else {
    next_slide();
  }

});

/**
*** func: next_slide for slider check
**/
function next_slide(){
  var curEQ = checkCurrent(),
      stepData = localStorage.getItem('step'),
      numGet = stepData.slice(-2),
      slideStep = Number(numGet) - 1;

  if(slideStep == (lengthQuiz-1)) {
    //01.update storage
    localStorage.setItem('finished','xongroi');
    showResult();

    //02.set hash
    var endStep = localStorage.getItem('step');
    window.location.hash = endStep;

    //03.Go to contact form
    window.location = '/contact/';
  } else {
    slider.goToNextSlide();
  }
}
/* event func: get started - before start quiz*/
$('#get-started').on("click", function() {
  localStorage.setItem('step','start');
  checkProgress();
});

/* event func: start button - go to quiz */
$('#start-now').on("click", function() {
  localStorage.setItem('step','ques01');
  checkProgress();
  slider.reloadSlider();

  //push hash to reset to default question
  var stepData = localStorage.getItem('step');
  window.location.hash = stepData;
  var question_dest = question_url + '#' + stepData;
  history.pushState(null, null, question_dest);
});

/* event func: start button - go to quiz */
$('#slider-back').on("click", function() {
  localStorage.setItem('step','start');
  checkProgress();
  slider.reloadSlider();
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
        thisSelected = "#" + order + i + " select option",
        thisText = "#" + order + i + " input[type='text']",
        items =  $(thisChecks),
        texts = $(thisText),
        selects = $(thisSelected);

      if(quesData!==null) { //if localStorage has data
        var question = quesData.question,
            answers = quesData.answer;
          for(var key in answers){

            //Is checkbox or radio
            $.each(items,function(index,item){
              if($(item).val()==key){
                $(item).prop('checked', true);
              }
            });

            //Is selected
            $.each(selects,function(index,item){
              $(item).removeAttr("selected");
              if($(item).val()==key){
                $(item).prop("selected", "selected");
              }
            });

            //Is text field
            texts.val(answers[key]);
            // $.each(texts,function(index,item){
            //   if($(item).val()==key){
            //     $(item).val(key);
            //   }
            // });
          }
      } else { //if localStorage doesn't have data
        var answers = {};

        // case: checkbox or radio
        /*$.each(items,function(index,item){
          if($(item).is(':checked')) {
            var $keyItem = $(item).val();
            answers[$keyItem] = $(item).next().text();
          }
        }); */

        // case: select
        $.each(selects,function(index,item){
          if($(item).attr('selected')) {
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

  // === reset all local Storage ===================================
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

    // === reset all answers ===================================
    var answers = {};
    $.each(items,function(index,item){
      if($(item).is(':checked')) {
        $(this).prop('checked', false);
      }
    });

    // === setup default values ===================================
    var
        parentDiv = "#" + order + i,
        thisChecked = "#" + order + i + " input:first",
        thisSelected = "#" + order + i + " select option:first",
        thisTextarea = "#" + order + i + " textarea";

    // case: checkbox or ----------------------------------------
    /* if($(parentDiv).find('select').length > 0 ) {
      var selectVal = $(thisSelected).text(),
        $keySelect  =  $(thisSelected).val();
        answers[$keySelect] = selectVal;
    } */

    // case: checkbox or radio -----------------------------------
  /*  if($(parentDiv).find('input').length > 0 ) {
      var checkVal = $(thisChecked).next().text(),
          $keyCheck  =  $(thisChecked).val();
          answers[$keyCheck] = checkVal;

    } */
    // case: textarea ---------------------------------------------
    if($(parentDiv).find('textarea').length > 0 ) {
      var textVal = '',
          $keyText  =  $(thisTextarea).attr('id');
          answers[$keyText] = textVal;
    }

    // assign value: assign value to objects
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

// running functions

var stepCheck = localStorage.getItem('send');
if(stepCheck == 'done'){
  resetLocalStorage();
}
