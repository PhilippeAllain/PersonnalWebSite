$(document).ready(function(){
  $(function() {
    $('#philippe').mouseover(function() {
      $(this).attr('src','img/moi_medium.jpg');
    });
    $('#philippe').mouseout(function() {
      $(this).attr('src','img/moi_petit.jpg');
  });
});

$('#login').replaceWith('<a class="nav-link" id="logout" href="logout.php">Logout</a>');
});
