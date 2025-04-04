<?php
ini_set("display_errors", "on");
class teilnehmer {
    public string $name;
    public string $vorname;
    public string $code;

    public function __construct(string $n, string $vn, string $c) {
        $this->name = $n;
        $this->vorname = $vn;
        $this->code = $c;
    }
}
?>