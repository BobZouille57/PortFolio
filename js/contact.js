// contact.js
$(document).ready(function() {
    $('form').submit(function(event) {
        event.preventDefault();
        var name = $('#name').val();
        var email = $('#email').val();
        var message = $('#message').val();

        if(name && email && message) {
            // Ici, tu pourrais ajouter une requête AJAX pour envoyer le message sans recharger la page
            alert("Votre message a été envoyé !");
        } else {
            alert("Tous les champs doivent être remplis.");
        }
    });
});
