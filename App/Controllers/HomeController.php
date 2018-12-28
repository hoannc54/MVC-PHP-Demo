<?php
/**
 * Created by PhpStorm.
 * User: conghoan
 * Date: 12/28/18
 * Time: 23:54
 */
namespace App\Controllers;

use App\Models\User;
use Core\Config;
use Core\Controller;
use Core\View;

class HomeController extends Controller
{
    public function index(){
        $user = new User();
        $users = $user->getUsers();
        return View::render('home/index', ['users' => $users]);
    }
}