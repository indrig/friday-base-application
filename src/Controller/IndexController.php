<?php
namespace Application\Controller;

use Friday;
use Friday\Base\Awaitable;
use Friday\Web\Controller;

class IndexController extends Controller{
    public function actionIndex(){


        $deferred = new Friday\Base\Deferred();
        Friday::$app->getDb()->createCommand("SELECT * FROM test")->queryColumn()->await(function ($result) use($deferred){
            if($result instanceof \Throwable) {
                $deferred->exception($result);
            } else {
                var_dump($result);
                $deferred->result($this->render('index'));

            }
        });

        return $deferred->awaitable();
    }
}