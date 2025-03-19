<?php
class Person {
    // Attribute (Member)
    private string $vorname;
    private string $nachname;
    

    // spezieller (parametrisierter) Konstruktor
    public function __construct(string $vn, string $nn) {
        $this->setVorname($vn);
        $this->setNachname($nn);
    }

    // Öffentliche Zugriffsfunktionen
    // Setter
    public function setVorname(string $vn): void {
        $this->vorname = $vn;
    }

    public function setNachname(string $nn): void {
        $this->nachname = $nn;
    }

    // Getter
    public function getVorname(): string {
        return $this->vorname;
    }

    public function getNachname(): string {
        return $this->nachname;
    }

    // Sonstige Funktionen
    public function ausgabe() {
        echo "<p>";
        echo "Vorname: $this->vorname<br>";
        echo "Nachname: $this->nachname<br>";
        echo "</p>";
    }

}
?>