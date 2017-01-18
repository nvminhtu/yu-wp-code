jQuery(function($){

 var total_cate = $('#list_cate_works ul li').length,
     active_cat = $('#list_cate_works').data('active-cat');


//------start func2: if click------------
 $('.input_check').click(function(){
    $('.catew').removeClass('active_query');
    $('.catew').removeClass('disable_query');
 });

//------end func2: end click ------------

 $('#list_cate_works input').change(function(){
	var array_active = [];
	var active_name;
	$("#txt_notfoud").hide();
	$(".list_w").stop(1,1).hide().delay(500).fadeIn(500);
	$("#ajax_bg").stop(1,1).fadeIn(500).delay(500).fadeOut(500);




	if($('#active_all').prop('checked')) {
		$(".catew").each(function(index, element) {
      $(this).fadeIn();

      });
		return;
	} //end if


	else{
		$(".catew").fadeOut(); //fadeOut all box
		$(".input_check").each(function(index, element) {	// add tab actived into array
            	if($(this).prop('checked')){
					 active_name = $(this).attr("id");
				}
			//	console.log(active_name);
        });
			var k = 0;
				$("."+active_name).fadeIn();
				$("."+active_name).each(function(index, element) {
               	 k++;
            	});
			if(k>0){
				 $("#txt_notfoud").fadeOut();
			}
			else{
				$("#txt_notfoud").delay(1400).fadeIn();
			}


	}//end else

}).eq(0).trigger('change');
});


jQuery(function($){

 var total_cate = $('#list_cate_works ul li').length,
     active_cat = $('#list_cate_works').data('active-cat');

 $('#list_cate_works select').change(function(){
	// console.log("change");
	var array_active = [];
	var active_name;
	$("#txt_notfoud").hide();
	$(".list_w").stop(1,1).hide().delay(500).fadeIn(500);
	$("#ajax_bg").stop(1,1).fadeIn(500).delay(500).fadeOut(500);

	$('#list_cate_works select option:selected').each(function() {
		///	console.log($(this).attr("value"));
	if($(this).attr("value")==="active_all")
	{
			$(".catew").each(function(index, element) {
                $(this).fadeIn();
            });
			return;
	}//end if


	else{
		$(".catew").fadeOut(); //fadeOut all box
					 active_name = $(this).attr("value");
			//	console.log(active_name);

			var k = 0;
				$("."+active_name).fadeIn();
				$("."+active_name).each(function(index, element) {
               	 k++;
            	});
			if(k>0){
				 $("#txt_notfoud").fadeOut();
			}
			else{
				$("#txt_notfoud").delay(1400).fadeIn();
			}


	}//end else

	});

}).eq(0).trigger('change');


// func3 check if query var category is equal to item or not
if($('.catew').hasClass('disable_query')) {
  $('.catew').hide();
}


});
