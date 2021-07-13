<?php


namespace Runroom\GildedRose\Items;


class AgedBrieItem extends Item
{
    public function __construct(string $name, int $sell_in, int $quality)
    {
        parent::__construct($name, $sell_in, $quality);
    }


    public function updateItem(): void
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
