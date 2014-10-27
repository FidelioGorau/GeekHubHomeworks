<?php

namespace Core;

class Cars implements TransportInterface {

    static function movementMethod(){
        return 'Can ride';
    }
}