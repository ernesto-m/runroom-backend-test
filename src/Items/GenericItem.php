<?php


namespace Runroom\GildedRose\Items;


class GenericItem extends Item
{

    public function __construct(string $name, int $sell_in, int $quality)
    {
        parent::__construct($name, $sell_in, $quality);
    }

    public function updateItem(): void
    {
        $this->decreaseQuality(true);
    }
}
