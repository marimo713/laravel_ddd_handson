<?php
namespace App\Infrastructure\Repository\Eloquent;

use App\Domain\Entity\Item;
use App\Domain\Repository\ItemRepository;
use App\Infrastructure\Eloquent\EloquentItem;
use Illuminate\Support\Collection;

class EloquentItemRepository implements ItemRepository
{
    private $eloquent;

    public function __construct(EloquentItem $eloquent)
    {
        $this->eloquent = $eloquent;
    }
    public function findAll(): array
    {
        return $this->eloquent->get()->map(function ($eloquent) {
            return $eloquent->toDomain();
        })->all();
    }
}
