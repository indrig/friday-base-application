<?php
namespace Application\Model;

use Friday\Db\ActiveRecord;

class User extends ActiveRecord{

    public function attributes()
    {
        return ['id', 'created_at', 'updated_at', 'username', 'email', 'phone'];
    }
}