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

    var $name = $('#name'),
        $mail = $('#mail'),
        $password = $('#password'),
        $envoi = $('#envoi'),
        $reset = $('#rafraichir'),
        $error = $('#error'),
        $champ = $('.champ');

    $champ.keyup(function(){
        if($(this).val().length < 3){ // si la chaîne de caractères est inférieure à 3
            $(this).css({ // on rend le champ rouge
                borderColor : 'red',
	        color : 'red'
            });
         }
         else{
             $(this).css({ // si tout est bon, on le rend vert
	         borderColor : 'green',
	         color : 'green'
	     });
         }
    });

    $envoi.click(function(e){
      //e.preventDefault(); // on annule la fonction par défaut du bouton d'envoi

        // puis on lance la fonction de vérification sur tous les champs :
        verifier($name);
        verifier($mail);
        verifier($password);
    });

    $reset.click(function(){
        $champ.css({ // on remet le style des champs comme on l'avait défini dans le style CSS
            borderColor : '#ccc',
    	    color : '#555'
        });
        $error.css('display', 'none'); // on prend soin de cacher le message d'erreur
    });

    function verifier(champ){
        if(champ.val() == ""){ // si le champ est vide
    	    $error.css('display', 'block'); // on affiche le message d'erreur
            champ.css({ // on rend le champ rouge
    	        borderColor : 'red',
    	        color : 'red'
    	    });
        }
    }

});
