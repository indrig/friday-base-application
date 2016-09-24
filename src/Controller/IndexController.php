<?php
namespace Application\Controller;

use Friday;
use Friday\Base\Awaitable;
use Friday\Web\Controller;

class IndexController extends Controller{
    public function actionIndex(){


        $deferred = new Friday\Base\Deferred();
        Friday::$app->getDb()->createCommand("SELECT * FROM test WHERE id=:id", ['id' => 10])->execute()->await(function ($result) use($deferred){
            if($result instanceof \Throwable) {
                $deferred->exception($result);
            } else {
                $deferred->result($this->render('index'));

            }
        });

        return $deferred->awaitable();
    }
}