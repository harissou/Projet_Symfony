<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Entity\Auteur;
use App\Entity\User;
use APP\Entity\Categorie;

class AuteurUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $auteur= new Auteur();

       $auteur->setPrenom('prenom')
            ->setNom('nom')
            ->setAdresse('adresse');
            
        
            $this->assertTrue($auteur->getPrenom() === 'prenom');
            $this->assertTrue($auteur->getNom() === 'nom');
            $this->assertTrue($auteur->getAdresse() === 'adresse');
            
    }

    
    public function testIsFalse() 
    {
       $auteur= new Auteur();

       $auteur->setPrenom('prenom')
            ->setNom('nom')
            ->setAdresse('adresse');
        
            $this->assertFalse($auteur->getPrenom() === 'false');
            $this->assertFalse($auteur->getNom() === 'false');
            $this->assertFalse($auteur->getAdresse() === 'false');
    }

    public function testIsEmpty()
    {
       $auteur= new Auteur();
     
       $this->assertFalse($auteur->getPrenom() === '');
       $this->assertFalse($auteur->getNom() === '');
       $this->assertFalse($auteur->getAdresse() === '');
    }

}



