<?php

class Temp{
    protected static $param1;
    protected static $param2;

    public function set_attr($p1,$p2){
        self::$params1 = $p1;
        self::$params2 = $p2;
    }

}