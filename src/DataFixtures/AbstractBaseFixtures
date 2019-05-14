<?php

/**
 * Abstract base fixture
 */

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

abstract class AbstractBaseFixtures extends Fixture
{
    protected $faker;

    protected $manager;

    /**
     * Load
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager):void
    {
        $this->manager=$manager;
        $this->faker=Factory::create();
        $this->loadData($manager);
    }

    /**
     * Load data
     *
     * @param ObjectManager $manager
     */
    abstract protected function loadData(ObjectManager $manager):void;
}