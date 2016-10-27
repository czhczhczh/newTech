<?php
class Confession
{
    public static function tell($content)
    {
        if ($content === '我要保护你'){
            echo '泡妞成功!<br/>';
        }else{
            echo '肤浅，算了吧!<br/>';
        }
    }
}