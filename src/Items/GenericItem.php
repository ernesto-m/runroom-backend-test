<?php


namespace Runroom\GildedRose\Items;


class GenericItem extends Item
{

    public function __construct($name, $sell_in, $quality)
    {
        parent::__construct($name, $sell_in, $quality);
    }

    public function updateItem()
    {
        $this->decreaseQuality();
    }
}
