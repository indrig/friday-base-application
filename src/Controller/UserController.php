<?php
namespace Application\Controller;

use Application\Form\UserSignUpForm;
use Friday\Web\Controller;

class UserController extends Controller{
    public function actionSignUp(){
        $request = $this->getRequest();

        $model = new UserSignUpForm();

        if($request->isPost && $model->load($request->post())){

        }

        return $this->render('sign-up', ['model' => $model]);
    }
}