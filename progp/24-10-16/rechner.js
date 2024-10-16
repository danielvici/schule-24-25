document.addEventListener("DOMContentLoaded", function() {
    var calculateBtn = document.getElementById("calculateBtn");
    var form = document.getElementById("calcFieldset");

    form.addEventListener("submit", function(event) {
        event.preventDefault(); // Verhindert das Absenden des Formulars

        // Hole die Werte aus den Feldern
        var gewicht = parseFloat(document.getElementById("usr_gewicht_js").value);
        var getrunken = parseFloat(document.getElementById("getraenk_anzahl_js").value);
        var sex = document.querySelector('input[name="usr_sex_js"]:checked').value;
        
        // Berechnung
        var alkoholmenge = getrunken * 5.5 * 8;
        var verteilungsfaktor = (sex === "sex_male") ? 0.7 : 0.6;

        var alkoholspiegel = (alkoholmenge / (verteilungsfaktor * gewicht)) * 0.8 - 0.5;
        alkoholspiegel = alkoholspiegel.toFixed(3); // Auf 3 Nachkommastellen runden

        // Ergebnis anzeigen
        var resultElement = document.querySelector('.result');
        if (alkoholspiegel >= 0.3) {
            resultElement.innerHTML = `Ihr Alkoholspiegel liegt bei <label class="dr">${alkoholspiegel}</label> Promille. Sie dürfen nicht mehr Auto fahren.`;
        } else {
            resultElement.innerHTML = `Ihr Alkoholspiegel liegt bei <label class="dr">${alkoholspiegel}</label> Promille. Sie dürfen Auto fahren.`;
        }
    });
});
