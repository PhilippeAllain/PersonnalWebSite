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

  $('#name').focus();

});
