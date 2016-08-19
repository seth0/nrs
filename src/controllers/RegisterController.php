<?php
/*

The Register

*/
namespace Nrs\controllers;

use Nrs\models\User;
use Nrs\Validation\Validator;
use duncan3dc\Laravel\BladeInstance;

class RegisterController extends BaseController
{

    public function getShowRegisterPage()
    {
        echo $this->Blade->render("register");
    }

    public function postShowRegisterPage()
    {
        $errors =[];

        $validation_data = [
          // leave this alone
        'nickname'        => 'min:3',
          // because this is my own shit
        'first_name'      => 'min:3',
        'last_name'       => 'min:3',
        'email'           => 'email|equals:verify_email',
        'verify_email'    => 'email',
        'password'        => 'min:3|equals:verify_password',

    ];

    // Validate data
    $validator = new Validator();

    $errors = $validator->isValid($validation_data);

    // if val failes go back to register PrettyPageHandler
    // page and display error MessageFormatter

    if (sizeof($errors) > 0)
    {
      $_SESSION['msg'] = $errors;
      echo $this->Blade->render('/register');
      unset($_SESSION['msg']);
      exit();
    }

    // save this data to in a database
        $user = new User();
        $user->nickname         = $_REQUEST['nickname'];
        $user->first_name       = $_REQUEST['first_name'];
        $user->last_name        = $_REQUEST['last_name'];
        $user->email            = $_REQUEST['email'];
        $user->password         = password_hash($_REQUEST['password'], PASSWORD_DEFAULT);
        $user->save();

        header("Location: /success");
        exit();
    }

}
