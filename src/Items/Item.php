<?php


namespace Runroom\GildedRose\Items;


abstract class Item
{

    public $name;
    public $sell_in;
    public $quality;

    function __construct($name, $sell_in, $quality) {
        $this->name = $name;
        $this->sell_in = $sell_in;
        $this->quality = $quality;
    }

    public abstract function updateItem();

    public function __toString() {
        return "{$this->name}, {$this->sell_in}, {$this->quality}";
    }

    protected function decreaseQuality() {

        if($this->quality == 0) {
            return;
        }

        $this->quality = $this->quality - 1;

        $this->decreaseSellIn();

        if($this->sell_in < 0) {
            $this->quality = $this->quality - 1;
        }

    }

    protected function decreaseSellIn() {
        $this->sell_in = $this->sell_in - 1;
    }

    protected function checkIfIsMaxQuality() {
        return $this->quality >= 50;
    }

    protected function checkIfIsMinQuality() {
        return $this->quality < 0;
    }

    protected function isSellInNegative() {
        return $this->sell_in < 0;
    }
}
