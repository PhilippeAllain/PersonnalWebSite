$( document ).ready( function () {

  $('#name').focus();

  $("#signupForm").validate();
  $.extend( $.validator.messages, {
	required: "Ce champ est obligatoire.",
	email: "Veuillez fournir une adresse électronique valide."
  });

  $('a:not(:last)').attr('href', '#');

  $(function() {
    $('#philippe').mouseover(function() {
      $(this).attr('src','img/moi_medium.jpg');
    });
    $('#philippe').mouseout(function() {
      $(this).attr('src','img/moi_petit.jpg');
    });
  });


  $reset.click(function(){
    $champ.css({ // on remet le style des champs comme on l'avait défini dans le style CSS
        borderColor : '#ccc',
      color : '#555'
    });
    $error.css('display', 'none'); // on prend soin de cacher le message d'erreur
});



});
