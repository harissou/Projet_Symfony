<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Entity\Auteur;
use App\Entity\User;
use APP\Entity\Categorie;

class CategorieUnitTest extends TestCase
{
    public function testIsTrue()
    {
       $categorie= new Categorie();

       $categorie->setDesignation('designation')
                 ->setDescription('description');
           
            
        
            $this->assertTrue($categorie->getDesignation() === 'designation');
            $this->assertTrue($categorie->getDescription() === 'description');
            
            
    }

    
    public function testIsFalse() 
    {
       $categorie= new Categorie();

       $categorie->setDesignation('designation')
                 ->setDescription('description');
        
                 $this->assertTrue($categorie->getDesignation() === 'false');
                 $this->assertTrue($categorie->getDescription() === 'false');
    }

    public function testIsEmpty()
    {
       $categorie= new Categorie();
     
       $this->assertTrue($categorie->getDesignation() === '');
       $this->assertTrue($categorie->getDescription() === '');
    }

}



