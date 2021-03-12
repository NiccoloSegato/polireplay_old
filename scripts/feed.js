var ref = firebase.firestore().collection('lezioni');

ref.where('status', '==', 'confirmed').orderBy('data', 'desc').limit(2).get().then(function(querySnapshot) {
    querySnapshot.forEach(function (doc) {
        let days = ['Domenica', 'Lunedì', 'Martedì', 'Mercoledì', 'Giovedì', 'Venerdì', 'Sabato'];

        // RETRIEVE DATA FROM FIREBASE FOR DOCUMENT
        ref.doc(doc.id).get().then(function (doc) {
            let professore = doc.data().docente;
            let link = doc.data().link;
            let insegnamento = doc.data().insegnamento;
            let data = doc.data().data;
            let titolo = doc.data().titolo;
            let corso = doc.data().corso;
            let corso2 = doc.data().corso2;
            let esercitazione = doc.data().esercitazione;

            let container = document.getElementById("feed-container");

            let subdiv = document.createElement("div");
            subdiv.className = "subdiv";

            let border = document.createElement("img");
            border.src = "assets/images/border.svg";
            border.className = "border-img";

            let a = document.createElement("div");
            a.className = "feed-element";
            a.onclick = function pageRedirect() {
                window.location.href = 'lesson.html?id=' + doc.id;
            }

            let div = document.createElement("div");

            let user_lbl = document.createElement("p");
            user_lbl.className = "user_lbl";
            if(esercitazione){
                user_lbl.innerHTML = "Esercitazione aggiunta " + days[ data.toDate().getDay() ] + ' ' + data.toDate().getDate() + '/' + (data.toDate().getMonth() + 1);
            }
            else {
                user_lbl.innerHTML = "Lezione aggiunta " + days[ data.toDate().getDay() ] + ' ' + data.toDate().getDate() + '/' + (data.toDate().getMonth() + 1);
            }

            let insegnamento_lbl = document.createElement("p");
            insegnamento_lbl.className = "insegnamento_lbl";
            insegnamento_lbl.innerHTML = insegnamento;

            let prof_lbl = document.createElement("p");
            prof_lbl.className = "prof_lbl";
            prof_lbl.innerHTML = "Docente: " + professore;

            let titolo_lbl = document.createElement("p");
            titolo_lbl.className = "titolo_lbl";
            titolo_lbl.innerHTML = titolo;

            let corso_lbl = document.createElement("h3");
            if (corso2 !== '') {
                corso_lbl.innerHTML = corso + " & " + corso2;
            } else {
                corso_lbl.innerHTML = corso;
            }
            corso_lbl.className = "corso_lbl";

            div.appendChild(user_lbl);
            div.appendChild(insegnamento_lbl);
            div.appendChild(prof_lbl);
            div.appendChild(titolo_lbl);
            div.appendChild(corso_lbl);

            a.append(div);
            subdiv.append(border);
            subdiv.append(a);
            document.getElementById("temp").style.display = "none";
            container.append(subdiv);
        });
    });
});