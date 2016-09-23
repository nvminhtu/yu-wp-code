/* var send = localStorage.getItem('send');

if(send == 'confirmation') {
	$(document).on('mailsent.wpcf7', function () {
	  localStorage.setItem('step','start');
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

$('#send-quiz').on("click",function(){
 	localStorage.setItem('send','confirmation');
});
*/
