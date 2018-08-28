<?php

class UserTest extends \PHPUnit\Framework\TestCase
{
    /** @test */
    public function that_we_can_get_the_first_name() 
    {
        $user = new \App\Models\User;
        $user->setFirstName('X');

        $this->assertEquals($user->getFirstName(), 'X');        
    }

    /** @test */
    public function that_first_name_was_trimmer() {
        $user = new \App\Models\User;
        $user->setFirstName('  Y    ');

        $this->assertEquals($user->getFirstName(), 'Y');
    }

    /** @test */
    public function that_we_can_retrieve_age() {
        $user = new \App\Models\User;
        $user->setAge(15);

        $this->assertEquals($user->getAge(), 15);
    }

    /** @test */
    public function that_user_info_package_contains_correct_values() {
        $user = new \App\Models\User;
        $user->setFirstName('X');
        $user->setAge(23);

        $userInfoPackage = $user->getInfoVariables();

        $this->assertArrayHasKey('first_name', $userInfoPackage);
        $this->assertArrayHasKey('age', $userInfoPackage);

        $this->assertEquals($userInfoPackage['first_name'], 'X');
        $this->assertEquals($userInfoPackage['age'], 23);
    }
}