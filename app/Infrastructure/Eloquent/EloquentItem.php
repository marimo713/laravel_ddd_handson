<?php
namespace App\Infrastructure\Eloquent;

use Illuminate\Database\Eloquent\Model;
use App\Domain\Entity\Item;

/**
 * @property string $name
 */
class EloquentItem extends Model
{
    protected $table = 'items';

    /**
     * @return Item
     */
    public function toDomain(): Item
    {
        return new Item(
            $this->name,
        );
    }
}
