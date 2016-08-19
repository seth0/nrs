<?php
/*

The Register

*/
namespace Nrs\controllers;

use Nrs\models\User;
use Nrs\Validation\Validator;
use duncan3dc\Laravel\BladeInstance;
use Nrs\auth\LoggedIn;

class AuthenticationController extends BaseController
{

    public function getShowLoginPage()
    {
        echo $this->Blade->render("login");
    }

    public function postShowLoginPage()
    {
      $okay = true;
      $email = $_REQUEST['email'];
      $password = $_REQUEST['password'];

      // Look up to the user
      $user = User::where('email', '=', $email)
                 ->first();

      if ($user != null) {
        // validate the data
        if (! password_verify($password, $user->password))
        {
            $okay = false;
        }
      } else {
        $okay = false;
      }
      // if valid LOGIN them in
      if ($okay) {
        $_SESSION['user'] = $user;
        header("Location: /");
        exit();
      } else {
        $_SESSION['msg'] = ["Invalid Login!"];
        echo $this->Blade->render('login');
        unset($_SESSION['msg']);
        exit();
      }
      // if not valid redirect login page
    }

    public function getLogout()
    {
        unset($_SESSION['user']);
        session_destroy();
        header("Location: /login");
        exit();
    }

    public function getTestUser()
    {
      dd(LoggedIn::user()->first_name);
    }
}
