<?php
namespace Application\Form;

use Friday\Base\Model;

class UserSignUpForm extends Model {
    public $email;

    public $password;

    public $passwordRetry;

}