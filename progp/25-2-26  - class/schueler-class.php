<?php
class Schueler {
    // Attribute (Member)
    private string $vorname;
    private string $nachname;
    private string $klasse;

    // spezieller (parametrisierter) Konstruktor
    public function __construct(string $vn, string $nn, string $kl) {
        $this->setVorname($vn);
        $this->setNachname($nn);
        $this->setKlasse($kl);
    }

    // Öffentliche Zugriffsfunktionen
    // Setter
    public function setVorname(string $vn): void {
        $this->vorname = $vn;
    }

    public function setNachname(string $nn): void {
        $this->nachname = $nn;
    }

    public function setKlasse(string $kl): void {
        $this->klasse = $kl;
    }

    // Getter
    public function getVorname(): string {
        return $this->vorname;
    }

    public function getNachname(): string {
        return $this->nachname;
    }

    public function getKlasse(): string {
        return $this->klasse;
    }

    // Sonstige Funktionen
    public function ausgabe() {
        echo "<p>";
        echo "Vorname: $this->vorname<br>";
        echo "Nachname: $this->nachname<br>";
        echo "Klasse: $this->klasse";
        echo "</p>";
    }

    public function versetzen():bool{
        if($this->klasse == "2BKI1"){
            $this->klasse = "2BKI2";
            return true;
        }
        return false;
    }
}
?>