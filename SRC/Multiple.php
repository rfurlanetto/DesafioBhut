<?php

namespace SRC;

use SRC\Message;

class Multiple
{

    private $arrResponse = [ 3, 5 ];
    
    function getMultiple($index)
    {
        
        $message = new Message();
        
        $response = $index;

        foreach($this->arrResponse as $key){
            if($index % $key == 0){
                $response = $message->getMessage($response, $key, $index);
            }
        }
        return $response;
    }
}
