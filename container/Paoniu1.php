<?php
//容器：通过数组key=》value记录要实例化的全程要用的核心对象，如Controller、Model等等的服务类
/**
 * 泡妞方案1
 */
class Paoniu1
{
    public static $r;

    public static function setOption($key, $value){
        Paoniu1::$r[$key] = $value;
    }
    public static function getOption($key){
        return Paoniu1::$r[$key];
    }

    public static function UnsetOption($key){
        unset(self::$r[$key]);
    }
}