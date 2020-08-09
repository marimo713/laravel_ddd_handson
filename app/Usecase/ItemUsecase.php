<?php
namespace App\Usecase;

use App\Domain\Entity\Item;
use App\Domain\Repository\ItemRepository;

class ItemUsecase
{
    private $itemRepo;

    public function __construct(ItemRepository $itemRepo)
    {
        $this->itemRepo = $itemRepo;
    }

    public function getAllItems() : array
    {
        return $this->itemRepo->findAll();
    }
}
