<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Entity\User;
use App\Entity\Auteur;
use APP\Entity\Categorie;
class UserUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $user= new User();

       $user->setEmail('true@test.com')
            ->setPrenom('prenom')
            ->setNom('nom')
            ->setPassword('password');
        
            $this->assertTrue($user->getEmail() === 'true@test.com');
            $this->assertTrue($user->getPrenom() === 'prenom');
            $this->assertTrue($user->getNom() === 'nom');
            $this->assertTrue($user->getPassword() === 'password');
            
    }

    
    public function testIsFalse() 
    {
       $user= new User();

       $user->setEmail('true@test.com')
            ->setPrenom('prenom')
            ->setNom('nom')
            ->setPassword('password');
        
            $this->assertFalse($user->getEmail() === 'false@test.com');
            $this->assertFalse($user->getPrenom() === 'false');
            $this->assertFalse($user->getNom() === 'false');
            $this->assertFalse($user->getPassword() === 'false');
    }

    public function testIsEmpty()
    {
       $user= new User();
     
        $this->assertEmpty($user->getEmail() === '');
        $this->assertEmpty($user->getPrenom() === '');
        $this->assertEmpty($user->getNom() === '');
    }

}



