<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use App\Domain\Entity\Item;
use App\Usecase\ItemUsecase;

class ItemController extends Controller
{
    /** @var ItemUsecase */
    private $itemUsecase;

    public function __construct(ItemUsecase $itemUsecase)
    {
        $this->itemUsecase = $itemUsecase;
    }

    public function getAllItems() : JsonResponse
    {
        $items = $this->itemUsecase->getAllItems();

        return response()->json($this->itemsToArray($items));
    }

    private function itemsToArray(array $items) : array
    {
        $result = [];
        foreach ($items as $item) {
            $result[] = [
                'name' => $item->name()
            ];
        }
        return $result;
    }
}
