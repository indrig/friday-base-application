<?php
namespace Application\Controller;

use Friday\Web\Controller;

class IndexController extends Controller{
    public function actionIndex(){
        try {
            \Friday::error('test');

        }catch (\Throwable $T){
            echo  $T;
        }
        return $this->render('index');
    }
}