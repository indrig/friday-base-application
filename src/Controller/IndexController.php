<?php
namespace Application\Controller;

use Application\Model\User;
use Friday;
use Friday\Base\Awaitable;
use Friday\Web\Controller;

class IndexController extends Controller{
    public function actionIndex(){


        $deferred = new Friday\Base\Deferred();
        $user =new User([
            'created_at' => time(),
            'updated_at' => time(),
        ]);
        $user->save()->await(function ($userSaveResult) use ($deferred, $user){
            if($userSaveResult instanceof \Throwable){

                $deferred->exception($userSaveResult);
            } else {
                $deferred->result($this->render('index'));

            }

        });


        return $deferred->awaitable();
    }
}