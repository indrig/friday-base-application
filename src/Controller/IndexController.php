<?php
namespace Application\Controller;

use Friday\Base\Awaitable;
use Friday\Promise\Deferred;
use Friday\Web\Controller;

class IndexController extends Controller{
    public function actionIndex(){

        return $this->render('index');
    }
}