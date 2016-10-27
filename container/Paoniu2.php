<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2016/6/17
 * Time: 13:08
 */
class F
{
    public function say($bbb)
    {
        echo 'i am fader';
    }
}

class C extends F
{
    /*php子类只看同名函数.不看参数个数 php的重载指的是魔术__call【static】*/
    public function say()
    {
        echo '我是孩儿';
    }
}

$c = new C;
$bbb = 'woshibibibib';

$c->say();
//$c->say($bbb);