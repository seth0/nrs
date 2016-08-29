<?php
/*

The Register

*/
namespace Nrs\controllers;

use Nrs\models\User;
use Nrs\Validation\Validator;
use duncan3dc\Laravel\BladeInstance;
use Nrs\email\SendEmail;
use Nrs\models\UserPending;

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
        'email'           => 'email|equals:verify_email|unique:User',
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

        $token = md5(uniqid(rand(), true)) . md5(uniqid(rand(), true));
        $user_pending = new UserPending;
        $user_pending->token =$token;
        $user_pending->user_id = $user->id;
        $user_pending->save();

        $message = $this->Blade->render('emails.welcome-email',
        ['token' => $token]
        );
        SendEmail::SendEmail($user->email, "Welcome to PlayMaf.io", $message);

        header("Location: /success");
        exit();
    }

    public function getVerifyAccount()
    {
        $user_id = 0;
        $token = $_GET['token'];
        // look up the token
        $user_pending = UserPending::where('token', '=', $token)->get();
        foreach($user_pending as $item){
            $user_id = $item->user_id;
        }
        if ($user_id > 0) {
            // make the user account active
            $user = User::find($user_id);
            $user->active = 1;
            $user->save();
            UserPending::where('token', '=', $token)->delete();
            header("Location: /account-activated");
            exit();
        } else {
            header("Location: /page-not-found");
            exit();
        }

}
}
