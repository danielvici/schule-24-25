let datum = "10.10.2010";
var datum_array = datum.split(".");

let tag = datum_array[0];
let monat = datum_array[1];
let jahr = datum_array[2];

var datum_element = document.querySelector('.datum');
var tag_element = document.querySelector('.tag');
var monat_element = document.querySelector('.monat');
var jahr_element = document.querySelector('.jahr');
var gueltig_element = document.querySelector('.gueltig');

datum_element.innerHTML = datum;
tag_element.innerHTML = tag;
monat_element.innerHTML = monat;
jahr_element.innerHTML = jahr;

let IstSchaltJahr = false;

if (jahr % 4 == 0 && jahr % 100 != 0 || jahr % 400 == 0){
    IstSchaltJahr = true;
}

switch (monat) {
    case 1: case 3: case 5: case 7:  case 8:case 10: case 12: 
        $tage_max = 31; break;
    case 4: case 6: case 9: case 11:
        $tage_max = 30; break;
    case 2:
        if (IstSchaltJahr) {
            $tage_max = 29;
        } else {
            $tage_max = 28;
        }
        break;
}

