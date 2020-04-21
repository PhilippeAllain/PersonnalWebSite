$(document).ready(function(){

  $('a:not(:last)').attr('href', '#');
  $('form').hide().show('2000', 'linear');

  $(function() {
    $('#philippe').mouseover(function() {
      $(this).attr('src','img/moi_medium.jpg');
    });
    $('#philippe').mouseout(function() {
      $(this).attr('src','img/moi_petit.jpg');
    });
  });

  $("#subcribe").validate();
  $.extend( $.validator.messages, {
	required: "Ce champ est obligatoire."
} );
  $('#name').focus();
  $('input').focus( function() {
    leFocus = $(this).attr('placeholder');
    $('#status').text('La zone '+ leFocus + ' est a remplir.').css('color', 'red');
  });
});
