<?php
//工厂类：决定选择哪些具体类去生成对象（生产产品），其实就是为了“产品”和“生产产品的具体”的解耦，这样可以改生产的类并在这里的方法中改对应的生产类就行了，调用此类的代码不用改
require 'BuyFlower.php';
require 'BuyRing.php';
require 'GiveBigGift.php';
require 'GiveLittleGift.php';
require 'Confession.php';
require 'GetPhone.php';
require 'GetWeixin.php';

class Factory
{
    /*问联系方式*/
    public static function getConnet()
    {
        GetPhone::getConnet();
    }

    /*买礼物*/
    public static function buyGift()
    {
        BuyFlower::getflower();
    }

    /*送礼物*/
    public static function GiveGift()
    {
        GiveBigGift::giveGift();
    }

    /*表白*/
    public static function talk($confession)
    {
        Confession::tell($confession);
    }
}