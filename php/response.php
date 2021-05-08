<?php

class Response{
    function __construct(){
        $this->validCard = 0;
        $this->moveComplete = 0;
        $this->gameState = "idle";
        $this->playedCards = array();
        $this->decks = array();
        $this->crowns = array();
    }
    function sendMoveComplete($complete) {
        if($complete) {
            echo "1";
        } else {
            echo "0";
        }
    }

    function sendPlayerInfo($info) {
        $response = '';
        $response .= $info[0] . "_";
        $response .= $info[1];
        echo $response;
    }

    function sendRoundEnd($decksNCrowns) {
        $decks = $decksNCrowns[0];
        $crowns = $decksNCrowns[1];
        $response = '';
        for($i = 0; $i < count($crowns); $i++) {
            $response .= $crowns[$i] . ":" . $decks[$i];
            if($i < count($crowns) - 1) {
                $response .= "-";
            }
        }
        echo $response;
    }

    function sendGameState($gameState) {
        echo $gameState;
    }

    function sendPlayCard($r) {
        echo $r;
    }
}
?>