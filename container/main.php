<?php
/*调用程序（客户）：在容器中注册哪个工厂哪个产品=》从容器中获取去哪个工厂生产什么产品=》执行*/
 require 'Paoniu1.php';//容器类
 require 'Factory.php';//工厂类

Paoniu1::setOption('buyGift',function(){
    Factory::buyGift();//当要实例化此对象时再用工厂类生产对象(产品)
});//在容器中注册类

Paoniu1::setOption('GiveGift',function(){
    Factory::GiveGift();
});

Paoniu1::setOption('talk',function($content){
    Factory::talk($content);
});

$buygift = Paoniu1::getOption('buyGift');//从容器中获取去哪个工厂生产什么产品
$buygift();//工厂类生产对象(产品)

$givegift = Paoniu1::getOption('GiveGift');
$givegift();

$talk = Paoniu1::getOption('talk');
$talk('我要保护你');