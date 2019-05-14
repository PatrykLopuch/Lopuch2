<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 14.05.19
 * Time: 18:00
 */


/**
 * Test repository.
 */

namespace App\Repository;

/**
 * Class TestRepository.
 */
class TestRepository
{
    /**
     * Data.
     *
     * @var array
     */
    private $data = [
        1 => [
            'id' => 1,
            'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'tags' => [
                'Sed',
                'convallis',
                'nibh',
            ],
        ],
        2 => [
            'id' => 2,
            'title' => 'Etiam diam ipsum, dignissim eget suscipit nec, faucibus accumsan felis',
            'tags' => [
                'Phasellus',
                'vestibulum',
                'tortor',
            ],
        ],
        3 => [
            'id' => 3,
            'title' => 'Nullam eget dui blandit, scelerisque lacus a, sagittis nibh',
            'tags' => [
                'Curabitur',
                'consectetur',
                'porttitor',
            ],
        ],
    ];

    /**
     * @return array
     */
    public function FindAll(): array
    {
        return $this->data;
    }

    /**
     * @param int $id
     * @return array|null
     */
    public function FindById(int $id): ?array
    {
        return isset($this->data[$id])  && count($this->data)
            ? $this->data[$id] : null;
    }

}