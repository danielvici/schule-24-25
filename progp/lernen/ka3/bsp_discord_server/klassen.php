<?php

class discord_Server{

    private int $id;
    public string $name;


    function __construct(int $id, string $name){
        $this->id = $id;
        $this->name = $name;
    }

    public function getServer(){
        echo "Name: " .$this->name . "<br> ID: " . $this->id;
    }

    public function beitrete():void{
        // Server beitreten
    }

    public function verlassen():void{
        // Server verlassen

    }

}

class text_channel extends discord_Server{
    public int $channel_id;
    public string $channel_text;
    public string $channel_author;
    function __construct(int $id, string $name, int $channel_id, string $channel_text, string $channel_author){
        parent::__construct($id, $name);
        $this->channel_id = $channel_id;
        $this->channel_text = $channel_text;
        $this->channel_author = $channel_author;
    }
    public function löschen():void{
        // text channel löschen
    }
    public function bearbeiten():void{
        // text channel bearbeiten
    }
    public function gettextchannel():void{
        parent::getServer();
        echo "<br>Text Channel ID: " . $this->channel_id;
        echo "<br>Text Channel Text: " . $this->channel_text;
        echo "<br>Text Channel Author: " . $this->channel_author;
    }
}

class voice_channel extends discord_Server{
    private int $voice_id;
    public array $nutzer;
    function __construct(int $id, string $name, int $voice_id, array $nutzer ){
        parent::__construct($id, $name);
        $this->voice_id = $voice_id;
        $this->nutzer = $nutzer;
    }
    public function löschen():void{
        // text channel löschen
    }
    public function bearbeiten():void{
        // text channel bearbeiten
    }
    public function getvoicechannel():void{
        parent::getServer();
        echo "<br>Voice Channel ID: " . $this->voice_id;
        echo "<br>Nutzer: " . var_dump($this->nutzer);
    }
}