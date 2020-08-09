<?php
namespace App\Domain\Repository;

use App\Domain\Entity\Item;

interface ItemRepository
{
    /**
     * @return array
     */
    public function findAll(): array;
}
