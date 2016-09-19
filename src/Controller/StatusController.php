<?php
namespace Application\Controller;

use Friday\Promise\Deferred;
use Friday\Web\Controller;

class StatusController extends Controller{
    public function actionIndex(){

        $cache = \Friday::$app->cache;

        $cache->multiSet(['a' => 10, 'b' => 30, 'c' => 70])->then(function ($result) {
            var_dump($result);
        });
        $deferred = new Deferred();
        $this->connectionContext->post(function () use($deferred){
            $deferred->resolve($this->render('index'));
        });
        return $deferred->promise();
    }

    function __destruct()
    {
        var_dump(__CLASS__ .'::__destruct');
    }
}