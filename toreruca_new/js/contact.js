/**
*** func: on success in sending email Contact Form 7
**/
var send = localStorage.getItem('send');

if(send == 'confirmation') {
	$(document).on('mailsent.wpcf7', function () {
	  localStorage.setItem('step','beforestart');
	  localStorage.setItem('send','done');
	  
	  //--restore status
  	  checkProgress();
  	  resetLocalStorage();
  	  slider.reloadSlider();
  	  custom_slide();

	  //--set hash
	  var startStep = localStorage.getItem('step');
	  window.location.hash = startStep;

	});
}

/**
*** func: click send after confirmation go
**/
$('#send-quiz').on("click",function(){
 	localStorage.setItem('send','confirmation');
});
