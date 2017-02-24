(function($) {
    "use strict";

    function init(){
      gotoConfirm();
    }

    function gotoConfirm(){
      //getdata: get data and show to textarea
      var note_data = localStorage.getItem('your-note');
      $('#your-note-confirm').html(note_data);

      //backdata: check data has or not
      $('#your-note').html(note_data);
      

      
      //action: click button - go to confirm page - save data
      $('.btn_save_data_ct1').click(function() {
        var note_data = $('#your-note').val();
        localStorage.setItem('your-note', note_data);
      });

      //action: click button - go to thanks page - delete data
      $('.btn_send_finish_data').click(function(){
        localStorage.removeItem('your-note');
      });
      
    }

   
    //running
    $(function() {
      init();
    });

})(jQuery);
