<?php
namespace Application\Controller;

use Application\Model\User;
use Friday;
use Friday\Base\Awaitable;
use Friday\Web\Controller;

class IndexController extends Controller{
    public function actionIndex(){


        $deferred = new Friday\Base\Deferred();

                $deferred->result($this->render('index'));


        return $deferred->awaitable();
    }
}