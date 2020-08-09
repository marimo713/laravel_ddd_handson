<?php
namespace App\Domain\Entity;

class Item
{
    /** @var string */
    private $name;

    /*
    * @param ItemId $id
    * @param string $name
    * @param ItemPrice $price
    * @param Stock $stock
    */
   public function __construct(string $name)
   {
       $this->name = $name;
   }

   public function name() : string
   {
       return $this->name;
   }
}
