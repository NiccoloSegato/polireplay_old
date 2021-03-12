var counter = 0

$(document).ready( function() {
    counter = 1;
    let datas = new Date();
    let day = null;
    if (datas.getDate() < 10 ){
        day = '0' + datas.getDate().toString();
    }
    else {
        day = datas.getDate().toString();
    }
    let today = datas.getFullYear().toString() + '-' + (datas.getMonth() + 1).toString() + '-' + day;
    document.getElementById('date').value = today;

    let query = decodeURIComponent(window.location.search.substring(7));
    if(query === 'link'){
        alert('Il link che hai inserito è già presente su PoliReplay');
    }
    else if (query === 'user'){
        alert('L\'email che hai inserito non è abilitata ad aggiungere lezioni');
    }
    else if (query === 'gen'){
        alert('L\'URL che hai inserito non contiene una lezione del Politecnico di Milano oppure l\'email che hai inserito non è dell\'ateneo');
    }
    else if (query === 'internal'){
        alert('Errore interno. Ti preghiamo di controllare i dati e riprovare');
    }
});

function changeBtn(loading) {
    let btn = document.getElementById('bottone-aggiungi');
    if(loading){
        btn.style.background = 'rgb(240, 240, 240)';
        btn.style.cursor = 'default';
        btn.style.color = 'black';
        btn.innerHTML = 'Loading...';
    }
    else {
        btn.style.background = 'linear-gradient(90deg, rgba(0, 60, 255, 1) 0%, rgba(0, 255, 136, 1) 100%);';
        btn.style.cursor = 'pointer';
        btn.style.color = 'white';
        btn.innerHTML = 'Aggiungi';
    }
}

function submit(){
    submitNew();
}

function submitNew() {
    // Controllo che tutti i campi siano impostati
    if(checkFields()){
        if ((document.getElementById('link').value.includes('https://politecnicomilano.webex.com') || document.getElementById('link').value.includes('https://web.microsoftstream.com/video/')  || document.getElementById('link').value.includes('https://polimi365-my.sharepoint.com/')) && document.getElementById('email').value.includes('polimi.it')){
            this.onTransactionNew();
        } 
        else {
            alert('Il link che hai inserito non contiene nessuna lezione del Politecnico di Milano oppure non hai inserito una email istituzionale');
        }
    }
}

function checkFields(){
    let link = document.getElementById('link').value;
    let titolo = document.getElementById('titolo').value;
    let corso = document.getElementById('corso-sel').value;
    let email = document.getElementById('email').value;
    let docente = document.getElementById('docente-sel').value;
    let insegnamento = document.getElementById('insegnamento-sel').value;
    
    if(link !== '' && titolo !== '' && corso !== '' && email !== '' && docente !== ''  && insegnamento !== ''){
        return true;
    }
    else {
        alert('Tutti i campi sono obbligatori');
        return false;
    }
}

function twoDigits(d) {
    if(0 <= d && d < 10) return "0" + d.toString();
    if(-10 < d && d < 0) return "-0" + (-1*d).toString();
    return d.toString();
}

Date.prototype.toMysqlFormat = function() {
    return this.getUTCFullYear() + "-" + twoDigits(1 + this.getUTCMonth()) + "-" + twoDigits(this.getUTCDate()) + " " + twoDigits(this.getUTCHours()) + ":" + twoDigits(this.getUTCMinutes()) + ":" + twoDigits(this.getUTCSeconds());
};

function onTransactionNew() {

    document.getElementById('bottone-aggiungi').disabled = true;
    let link = document.getElementById('link').value;
    let titolo = document.getElementById('titolo').value;
    let corso = document.getElementById('corso-sel').value;
    let corso2 = document.getElementById('corso2-sel').value;
    let email = document.getElementById('email').value;
    let docente = document.getElementById('docente-sel').value;
    let esercitazione = document.getElementById('esercitazione_ck').checked;
    if(esercitazione){
        esercitazione = 1;
    }
    else {
        esercitazione = 0;
    }
    let addedDatePHP = new Date().toMysqlFormat();
    let insegnamento = document.getElementById('insegnamento-sel').value;

    if(checkFields()){
        changeBtn(true);
        window.location.href = 'https://polireplay.it/php/addlesson.php?addedDate=' + addedDatePHP + '&corso=' + corso + '&corso2=' + corso2 + '&data=' + new Date(document.getElementById('date').value).toMysqlFormat() + '&docente=' + docente + '&email=' + email + '&esercitazione=' + esercitazione + '&insegnamento=' + insegnamento + '&link=' + link + '&titolo=' + titolo ;
    }
    else {
        changeBtn(false);
    }
}


// Multi lesson
function addMulti() {
    counter = counter + 1;
    let contMulti = document.getElementById('multiple-cont').childNodes[1];

    let divider = document.createElement('div');
    divider.className = "divider";
    divider.style.marginTop = "70px";

    let subOne = document.createElement('h2');
    subOne.innerHTML = "Dettagli lezione " + counter;

    let linkTmp = document.createElement('input');
    linkTmp.className = "text-input";
    linkTmp.id = "link-" + counter;
    linkTmp.type = "text";
    linkTmp.name = "link";
    linkTmp.placeholder = "URL della lezione...";

    let descTmp = document.createElement('textarea');
    descTmp.className = "text-big";
    linkTmp.id = "titolo-" + counter;
    descTmp.type = "text";
    descTmp.name = "titolo";
    descTmp.placeholder = "Descrizione della lezione";

    let checkDiv = document.createElement('div');
    checkDiv.className = "checkbox-container";

    let labelTmp = document.createElement('label');
    labelTmp.innerText = "Esercitazione";

    let inputCheckB = document.createElement("input");
    inputCheckB.type = "checkbox";
    inputCheckB.name = "checkbox-esercitazione";
    inputCheckB.id = "esercitazione_ck-" + counter;

    labelTmp.appendChild(inputCheckB);
    checkDiv.appendChild(labelTmp);

    let subTwo = document.createElement('h2');
    subTwo.innerHTML = "Docente";

    let subPTwo = document.createElement('p');
    subPTwo.innerHTML = "Seleziona il docente del corso, non della lezione";

    let selectDoc = document.createElement('select');
    selectDoc.className = "js-example-basic-single";
    selectDoc.id = "docente-sel-" + counter;
    selectDoc.name = "state";
    selectDoc.style.width = "100%";
    selectDoc.appendChild(document.createElement('option'));

    let subThree = document.createElement('h2');
    subThree.innerHTML = "Corso e insegnamento";

    let selectCorso = document.createElement('select');
    selectCorso.className = "js-example-basic-single";
    selectCorso.id = "corso-sel-" + counter;
    selectCorso.name = "state";
    selectCorso.style.width = "100%";
    selectCorso.appendChild(document.createElement('option'));

    let selectInsegnamento = document.createElement('select');
    selectInsegnamento.className = "js-example-basic-single";
    selectInsegnamento.id = "insegnamento-sel-" + counter;
    selectInsegnamento.name = "state";
    selectInsegnamento.style.width = "100%";
    selectInsegnamento.appendChild(document.createElement('option'));

    let subFour = document.createElement('h2');
    subFour.innerHTML = "Data della lezione";

    let dateTmp = document.createElement('input');
    dateTmp.className = "text-input";
    dateTmp.id = "date-" + counter;
    dateTmp.type = "date";
    dateTmp.name = "date";

    contMulti.appendChild(divider);
    contMulti.appendChild(subOne);
    contMulti.appendChild(linkTmp);
    contMulti.appendChild(descTmp);
    contMulti.appendChild(checkDiv);
    contMulti.appendChild(subTwo);
    contMulti.appendChild(subPTwo);
    contMulti.appendChild(selectDoc);
    contMulti.appendChild(subThree);
    contMulti.appendChild(selectCorso);
    contMulti.appendChild(document.createElement('p'));
    contMulti.appendChild(selectInsegnamento);
    contMulti.appendChild(subFour);

    updateSelectors(counter);
}