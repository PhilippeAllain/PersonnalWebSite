$(document).ready(function(){

  $("#login").replaceWith('<a class="nav-link" id="logout" href="../model/logout.php">Déconnection</a>');

  $(function() {
    $('#philippe').mouseover(function() {
      $(this).attr('src','../img/moi_medium.jpg');
    });
    $('#philippe').mouseout(function() {
      $(this).attr('src','../img/moi_petit.jpg');
    });
  });

});
