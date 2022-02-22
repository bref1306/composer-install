<?php

namespace Coursmicroservice\ProjectComposer;

class Inspire {
    public function __construct(){

    }
    protected $inspirations = [
        "Ur awesome",
        "test",
        "Kom ça marche",
        "Kom c'est trop cool"
    ];

    public function displayInspiration(){
        return $this->inspirations[rand(0, count($this->inspirations)-1)];
    }
}

