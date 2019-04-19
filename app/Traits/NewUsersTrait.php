<?php

namespace App\Traits;

use App\User;
use Illuminate\Support\Facades\Hash;

trait NewUsersTrait
{

    private $_fields = [];

    public function createUser($fields){ // email or array fields
        $fields = is_array($fields)?$fields:['email'=>$fields];
        if(!empty($fields['email'])){
            $this->fillFields($fields['email']);
            $fields = array_merge($this->_fields,$fields);
            return User::insert($fields);
        }
        return false;
    }

    private function fillFields($email){
        list($account,$domain) = explode('@',$email);
        $this->_fields = [
            'email'=>$email,
            'first_name'=>$account,
            'last_name'=>$account,
            'password'=>Hash::make($account)
        ];
    }

}
