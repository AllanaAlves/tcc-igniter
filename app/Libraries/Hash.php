<?php
namespace App\Libraries;

class Hash
{
    public static function make($senha_funcionario){
        return password_hash($senha_funcionario, PASSWORD_BCRYPT);
    }

    public static function check($entered_senha_funcionario, $db_senha_funcionario){
        if(password_verify($entered_senha_funcionario, $db_senha_funcionario)){
            return true;
        }
        else
        {
            return false;
        }

    }

}