<?php


namespace Runroom\GildedRose\Items;


class SulfurasItem extends Item
{
    public function __construct($name, $sell_in, $quality)
    {
        parent::__construct($name, $sell_in, $quality);
    }

    public function updateItem()
    {
        return;
    }
}
