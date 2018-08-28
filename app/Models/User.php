<?php

namespace App\Models;

class User
{
    public $first_name;
    public $age;

    public function setFirstName($firstName) {
        $this->first_name = trim($firstName);
    }

    public function getFirstName() {
        return $this->first_name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getAge() {
        return $this->age;
    }

    public function getInfoVariables() {
        return ['first_name' => $this->first_name, 'age' => $this->age];
    }
}