<?php

namespace Core;


class Plains implements TransportInterface {

    static function movementMethod(){
        return 'Can fly';
    }
}