<?php


namespace Runroom\GildedRose\Items;


class AgedBrieItem extends Item
{
    public function __construct($name, $sell_in, $quality)
    {
        parent::__construct($name, $sell_in, $quality);
    }

    public function updateItem()
    {
        if(!$this->checkIfIsMaxQuality()) {
            $this->increaseQuality();
        }

        $this->decreaseSellIn();

        if($this->isSellInNegative() && !$this->checkIfIsMaxQuality()) {
            $this->increaseQuality();
        }
    }
}
