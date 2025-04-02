<?php
ini_set("display_errors", "on");
class mitarbeiter {
    public string $name;
    public string $geburtsdatum;
    public string $gehalt;

    public function __construct(string $n, string $gb, string $g) {
        $this->name = $n;
        $this->geburtsdatum = $gb;
        $this->gehalt = $g;
    }

    public function getInfo(): string {
        echo "Name: $this->name";
        echo "Geburtsdatum: $this->geburtsdatum";
        echo" Gehalt: $this->gehalt";
    }

    public function getJahresgehalt(): string {
        echo $this->gehalt * 12;
    }
}


class vollzeit extends mitarbeiter {
    public string $arbeitszeit =40;

    public function __construct(string $n, string $gb, string $g) {
        parent::__construct($n, $gb, $g);
        $this->name = $n;
        $this->geburtsdatum = $gb;
        $this->gehalt = $g;
    }
}
?>