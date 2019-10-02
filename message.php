<?php

trait HelloPlayer {

    public function helloplayer() {
        return "Hello Player! Hello Thrower!" . PHP_EOL;
    }

}

trait Call {

    public function call() {
        return "Our Profile";
    }
}
trait Quote {

    public function quote() {
        return "Somebody's trash can be someone else's Treasure.";
    }
}

class Message {
    use HelloPlayer, 
        Call,
        Quote;
}
