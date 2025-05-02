$(document).ready(function() {
    $('form').submit(function(event) {
        event.preventDefault();
        var name = $('#name').val();
        var email = $('#email').val();
        var message = $('#message').val();

        if(name && email && message) {
            alert("Votre message a été envoyé !");
        } else {
            alert("Tous les champs doivent être remplis.");
        }
    });
});

window.onload = function() {
    const message = document.querySelector('.contact-feedback');
    if (message) {
        setTimeout(() => {
            message.style.display = 'none';
        }, 3000);
    }
};

