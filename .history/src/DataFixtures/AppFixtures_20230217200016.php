<?php

namespace App\DataFixtures;

use App\Entity\Ingredient;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $ingredient = new Ingredient();
        $ingredient = setName();
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
