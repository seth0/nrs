<?php
namespace Nrs\models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Testimonial extends Eloquent
{
    public function user()
    {
        return $this->hasOne('Nrs\models\User');
    }
}
