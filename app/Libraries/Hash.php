<?php
namespace App\Libraries;

class Hash
{
    public static function make($password){
        return password_hash($password, PASSWORD_BCRYPT);
    }

    public static function check($entered_password, $db_password){
        if(password_verify($entered_senha_funcionario, $db_senha_funcionario)){
            return true;
        }
        else
        {
            return false;
        }

    }

}