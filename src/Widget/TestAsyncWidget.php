<?php
namespace Application\Widget;

use Friday;
use Friday\Base\Deferred;
use Friday\Web\Widget;

class TestAsyncWidget extends Widget{
    public function run(){
        $d = new Deferred();
        Friday::$app->getLooper()->taskWithDelayed(function (){
            return 'TEST TEXT';
        }, 2);
        return $this->async($d->awaitable());
    }
}