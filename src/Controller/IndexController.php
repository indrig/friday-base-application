<?php
namespace Application\Controller;

use Friday\Promise\Deferred;
use Friday\Web\Controller;

class IndexController extends Controller{
    public function actionIndex(){

        $cache = \Friday::$app->cache;
        /*$cache->set('test', 10)->then(function () use($cache) {
            $cache->multiGet(['test', 'test2'])->then(function($data){ var_dump($data);});
        });*/
        $cache->multiSet(['a' => 10, 'b' => 30, 'c' => 70])->then(function ($result) {
            var_dump($result);
        });
        $deferred = new Deferred();
        $this->connectionContext->post(function () use($deferred){
            $deferred->resolve($this->render('index'));
        });
        return $deferred->promise();
    }
}