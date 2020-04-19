$( document ).ready( function () {

  $("#signupForm").validate();
    jQuery.extend(jQuery.validator.messages, {
  required: "Entrer un nom ou un pseudo.",
  remote: "votre message",
  mail: "Entrer un mail valide.",
  maxlength: jQuery.validator.format("votre message {0} caractéres."),
  minlength: jQuery.validator.format("votre message {0} caractéres."),
  rangelength: jQuery.validator.format("votre message  entre {0} et {1} caractéres."),
  range: jQuery.validator.format("votre message  entre {0} et {1}."),
  max: jQuery.validator.format("votre message  inférieur ou égal à {0}."),
  min: jQuery.validator.format("votre message  supérieur ou égal à {0}.")
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
