<?php namespace Nrs\models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
    public function testimonials()
    {
        return $this->hasMany('Nrs\models\Testimonial');
    }
}
