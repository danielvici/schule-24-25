document.addEventListener("DOMContentLoaded", function() {
    var anzahlWuerfelInput = document.getElementById("anzahl_wuerfel");
    var ergebnisLabel = document.getElementById("ergebnis");

    // Initialer Text
    //ergebnisLabel.innerHTML = "moin";

    // Event Listener für den Submit-Button
    document.getElementById("submit_eingabe").addEventListener("click", function(event) {
        // Verhindern, dass das Formular abgeschickt und die Seite neu geladen wird
        event.preventDefault();

        // Anzahl der Würfel aus dem Input-Feld holen
        var anzahlWuerfel = parseInt(anzahlWuerfelInput.value);

        // Überprüfen, ob der Wert gültig ist
        if (isNaN(anzahlWuerfel) || anzahlWuerfel < 1) {
            ergebnisLabel.innerHTML = "Bitte eine gültige Anzahl an Würfeln eingeben.";
            return;
        }

        // Leeres Ergebnis vorbereiten
        var ergebnisseHTML = "";

        // Würfeln für die angegebene Anzahl der Würfel
        for (var i = 0; i < anzahlWuerfel; i++) {
            var augen = Math.floor(Math.random() * 6) + 1; // Zufallszahl zwischen 1 und 6

            // HTML für jedes Würfelergebnis erstellen
            ergebnisseHTML += `${i+1}. <img class='w' src='../bilder/${augen}.png' alt='${augen} Augen'>`;
        }

        // Die Würfelergebnisse anzeigen
        ergebnisLabel.innerHTML = ergebnisseHTML;
    });
});
