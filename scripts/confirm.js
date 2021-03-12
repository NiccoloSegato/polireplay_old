let id = null;

$(document).ready(function() {

    let query = decodeURIComponent(window.location.search.substring(7));
    let token = query.substring(0, 64);
    console.log(token);
    id = query.substring(68, );
    console.log(id);
    console.log(token);
});

function confirmLesson() {
    if(id !== null){
        window.location.href = "https://www.polireplay.it/php/confirm.php?id=" + id;
    }
}

function declineLesson() {
    alert("Contattaci all'indirizzo info@polireplay.it o su Telegram @polireplay_support e chiedi la rimozione");
}
