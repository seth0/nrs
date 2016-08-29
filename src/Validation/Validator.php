<?php
namespace Nrs\Validation;
use Respect\Validation\Validator as Valid;
class Validator
{
    public function isValid($validation_data)
    {
        $errors = [];
        foreach ($validation_data as $name => $value) {
            $rules = explode("|", $value);
            foreach ($rules as $rule) {
                $exploded = explode(":", $rule);

                switch ($exploded[0]) {
              case 'min':
                $min = $exploded[1];
                if (Valid::stringType()->length($min)->Validate($_REQUEST[$name]) == false) {
                    $errors[] = $name . " Must be atleast " . $min . " characters long! ";
                }
                break;

              case 'email':
                if (Valid::email()->Validate($_REQUEST[$name]) == false) {
                    $errors[] = $name . " Must be a valid email adress! ";
                }
                break;

              case 'equals':
                if (Valid::equals($_REQUEST[$name])->Validate($_REQUEST[$exploded[1]]) == false) {
                    $errors[] = " Password / Email - Value does not match verification value! ";
                }
                break;

              case 'unique':

              $model = "Nrs\\models\\" . $exploded[1];
              $table = new $model;
              $results = $table::where($name, '=', $_REQUEST[$name])->get();
              foreach ($results as $item) {
                $errors[] = $_REQUEST[$name] . "Already exists in this System!";
              }
              break;

                default:
                    $errors[] = "No value found!";
            }
        }
    }
    return $errors;
}
}
