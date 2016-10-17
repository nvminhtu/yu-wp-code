jQuery(function($){

 var total_cate = $('#list_cate_works ul li').length,
     active_cat = $('#list_cate_works').data('active-cat');

 // add active category from query string ?category=service-slug
 if(active_cat!=='') {
   $('#list_cate_works input').removeAttr('checked');
   var active_selected = '#'+ active_cat;
      active_selected = '#list_cate_works input' + active_selected;

   console.log(active_selected);
   $(active_selected).addClass('active');
   $(active_selected).prop( 'checked', true );
 }

 $('#list_cate_works input').change(function(){
	var array_active = [];
	$("#txt_notfoud").hide();
	$(".list_w").stop(1,1).hide().delay(500).fadeIn(500);
	$("#ajax_bg").stop(1,1).fadeIn(500).delay(500).fadeOut(500);


	if($('#active_all').prop('checked'))
	{
			$(".catew").each(function(index, element) {
                $(this).fadeIn();
            });
			//$(".input_check").prop('checked', false);
			return;
	}//end if


	else{
		$(".catew").fadeOut(); //fadeOut all box
		$(".input_check").each(function(index, element) {	// add tab actived into array
            	if($(this).prop('checked')){
					var active_name = $(this).attr("id");
					array_active.push(active_name);
				}
				//console.log(array_active);
        });
		if(array_active.length > 0){
			//this array is not empty

			var k = 0;
			for (var i = 0; i < array_active.length; i++){
				$("."+array_active[i]).fadeIn();
				$("."+array_active[i]).each(function(index, element) {
               	 k++;
            	});
			}
			if(k>0){
				 $("#txt_notfoud").fadeOut();
			}
			else{
				$("#txt_notfoud").delay(1400).fadeIn();
			}

		}else{
		   $("#txt_notfoud").delay(1400).fadeIn();

		}

	}//end else


	//$("#show_content").css("background","#fff");

}).eq(0).trigger('change');
});
