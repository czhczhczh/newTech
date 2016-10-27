<?php
/*变量属于对象，方法/常量/静态量属于类；（::：类和对象的引用符；  ->：对象引用符号）*/
class B
{
    /*变量*/
    const a = '常量归属类';
    public static $b;

    public $a;//属于对象的东西

    public function __construct()
    {
        $this->a = 123;
    }
    public static function sta(){
        echo '/*静态方法*/&nbsp&nbsp';
        echo '/*常量*/'.B::a.'/*常量*/&nbsp&nbsp';
        echo '/*静态*/'.B::a.'/*静态*/&nbsp&nbsp';
        echo '&nbsp&nbsp/*静态方法*<br/>';
    }

    public function say()
    {
        //echo $this->a;
        echo '方法归属类，静态方法只能操作只能操控归属类的东西<br/>';
    }
}
B::say();/*类调用*/
$obj = (new B);
$obj::sta();/*对象调用*/
echo $obj->a.'<br/>';
echo $obj::a.'<br/>';