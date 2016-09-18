<?php
namespace Application\Controller;

use Friday\Promise\Deferred;
use Friday\Web\Controller;

class IndexController extends Controller{
    public function actionIndex(){

        $deferred = new Deferred();
        $this->connectionContext->post(function () use($deferred){
            $deferred->resolve($this->render('index'));
        });
        return $deferred->promise();
    }
}