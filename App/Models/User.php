<?php
/**
 * Created by PhpStorm.
 * User: conghoan
 * Date: 12/28/18
 * Time: 23:54
 */
namespace App\Models;

class User extends \Core\Model
{
    public $table = 'users';

    public function getUsers(){
        $users = $this->select();
        return $users;
    }
}