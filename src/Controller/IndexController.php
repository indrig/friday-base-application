<?php
namespace Application\Controller;

use Friday;
use Friday\Base\Awaitable;
use Friday\Web\Controller;

class IndexController extends Controller{
    public function actionIndex(){
        $d = new Friday\Base\Deferred();
        $cache = Friday::$app->getCache();
        $cache->multiSet([
            'a' => 1,
            'b' => 2,
            'c' => 3
        ])->await(function ($result) use ($d, $cache) {
            $cache->get('b')->await(function ($result) use ($d) {
                var_dump($result);
                $d->result($this->render('index'));
            });

        });
        return $d->awaitable();
    }
}