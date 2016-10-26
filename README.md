# newTech
Di::set(‘BuyGift’, function(){

  return Factory::BuyGift();

} //注册到容器

$paoniu=factory::Hookup(factory::DI()); // 将容器注入主类

$paoniu->giveGifts(); //这里就可以调用BuyGift()这个次类（依赖类）；
