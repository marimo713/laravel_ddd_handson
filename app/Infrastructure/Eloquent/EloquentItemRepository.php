<?php
namespace App\Infrastructure\Eloquent;

use App\Domain\Entity\Item;
use App\Domain\Repository\ItemRepository;

class EloquentItemRepository implements ItemRepository
{
    public function findAll(): array
    {
        $item = new Item('name');
        return [$item];
    }
}
