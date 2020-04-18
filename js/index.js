$.validator.setDefaults( {
  submitHandler: function () {

  }
} );

$( document ).ready( function () {

  $('a:not(:last)').attr('href', '#');

  $(function() {
    $('#philippe').mouseover(function() {
      $(this).attr('src','img/moi_medium.jpg');
    });
    $('#philippe').mouseout(function() {
      $(this).attr('src','img/moi_petit.jpg');
    });
  });

  $( "#signupForm" ).validate( {
    rules: {
      firstname: "required",
      lastname: "required",
      username: {
        required: true,
        minlength: 2
      },
      email: {
        required: true,
        email: true
      },
      password: {
        required: true,
        minlength: 5
      },
    },

    messages: {
      firstname: "Entrer votre prénom",
      lastname: "Entrer votre nom",
      username: {
        required: "Entrer votre pseudo",
        minlength: "Votre pseudo doit avoir 2 caractères au minimum"
      },
      password: {
        required: "Entrer votre mot de passe",
        minlength: "Votre nom de passe doit être au minimum de 5 caractères"
      },

      email: "Entrer une adresse email valide",
    },

    errorElement: "em",
    errorPlacement: function ( error, element ) {
      // Add the `invalid-feedback` class to the error element
      error.addClass( "invalid-feedback" );

      if ( element.prop( "type" ) === "checkbox" ) {
        error.insertAfter( element.next( "label" ) );
      } else {
        error.insertAfter( element );
      }
    },
    highlight: function ( element, errorClass, validClass ) {
      $( element ).addClass( "is-invalid" ).removeClass( "is-valid" );
    },
    unhighlight: function (element, errorClass, validClass) {
      $( element ).addClass( "is-valid" ).removeClass( "is-invalid" );
    }
  } );

  $reset.click(function(){
    $champ.css({ // on remet le style des champs comme on l'avait défini dans le style CSS
        borderColor : '#ccc',
      color : '#555'
    });
    $error.css('display', 'none'); // on prend soin de cacher le message d'erreur
});

} );
