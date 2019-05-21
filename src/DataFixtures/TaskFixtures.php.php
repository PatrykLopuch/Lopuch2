<?php

namespace App\DataFixtures;

//use App\DataFixtures\AbstractBaseFixtures;
use App\Entity\Task;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class php extends AbstractBaseFixtures implements DependentFixtureInterface
{
    /**
     * Faker.
     *
     * @var \Faker\Generator
     */
    protected $faker;

    /**
     *
     * @var \Doctrine\Common\Persistence\ObjectManager
     */
    protected $manager;

    /**
     * @param ObjectManager $manager
     */
    public function loadData(ObjectManager $manager)
    {
        $this->faker = Factory::create();
        $this->manager = $manager;

        for ($i = 0; $i < 10; ++$i)
        {
            $task = new Task();
            $task->setTitle($this->faker->sentence);
            $task->setCreatedAt($this->faker->dateTimeBetween('-100 days','-1 days'));
            $task->setUpdatedAt($this->faker->dateTimeBetween('-100 days','-1 days'));
            $this->manager->persist($task);
        }

        $manager->flush();
    }

    /**
     * This method must return an array of fixtures classes
     * on which the implementing class depends on.
     *
     * @return array Array of dependencies
     */
    public function getDependencies(): array
    {
        return [CategoryFixtures::class];
    }
}
