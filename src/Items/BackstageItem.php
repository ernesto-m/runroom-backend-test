<?php


namespace Runroom\GildedRose\Items;


class BackstageItem extends Item
{
    public function __construct(string $name, int $sell_in, int $quality)
    {
        parent::__construct($name, $sell_in, $quality);
    }

    public function updateItem():void
    {

        if($this->sell_in <= 0) {
            $this->quality = 0;
        }elseif ($this->sell_in  <= 5) {
            $this->increaseQuality(3);
        }elseif ($this->sell_in  <= 10) {
            $this->increaseQuality(2);
        }else{
            $this->increaseQuality();
        }

        $this->decreaseSellIn();
    }

}
