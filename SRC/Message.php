<?php

namespace SRC;

class Message{

    private $arrResponse = [
        3 => 'BHUT',
        5 => 'IT'
    ];

    public function getMessage($response, $key, $index){
        $response = $this->removeIntMessage($index, $response);
        return $response .= $this->arrResponse[$key] . ' ';
    }

    public function removeIntMessage($index, $response){
        return str_replace($index, '', $response);
    }
}