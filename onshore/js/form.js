$(document).ready(function() {      
  var send = localStorage.getItem('send');
  var
     $confirm = $('#send-confirm'), 
     $sendform = $('#send-contact');
  
  if(send=='') {
    localStorage.setItem('send','notyet');
  }
  
  //click - change send value
  $confirm.click(function() {
    localStorage.setItem('send','confirm');
  });

  if(send=='confirm') {
    $('.wpcf7-previous').click(function() {
      localStorage.setItem('send','notyet');
    });  
  }
  
  //auto go to #id in homepage
  if(send=='notyet') {
    window.location ='http://onshore.works/#contact';
  }
  
  $sendform.click(function() {
    localStorage.removeItem('send');
  });  


});