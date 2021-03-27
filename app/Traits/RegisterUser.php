<?php
    namespace App\Traits;

    //A Trait is simply a group of methods that you want include within another class. 
    //A Trait, like an abstract class, cannot be instantiated on it’s own.
    // It is not possible to instantiate a Trait on its own
    // Php only allow single inheritance so Traits was introduced to combat that 

    trait RegisterUser{
        public function registerUser($fields){
            $user = \App\Models\User::create([
                'name'      => $fields->name,
                'username'  => $fields->username,
                'email'     => $fields->email,
                'password'  => $fields->password
            ]);
            return $user;
        }
    }
 

?>