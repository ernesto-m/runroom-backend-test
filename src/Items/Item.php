<?php


namespace Runroom\GildedRose\Items;


abstract class Item
{

    public string $name;
    public int $sell_in;
    public int $quality;

    function __construct(string $name, int $sell_in, int $quality) {
        $this->name = $name;
        $this->sell_in = $sell_in;
        $this->quality = $quality;
    }

    public abstract function updateItem();

    public function __toString() {
        return "{$this->name}, {$this->sell_in}, {$this->quality}";
    }

    protected function decreaseQuality(bool $double_when_sell_in_negative = false) {

        if($this->checkIfIsMinQuality()) {
            return;
        }

        $this->quality = $this->quality - 1;

        $this->decreaseSellIn();

        if($double_when_sell_in_negative && $this->sell_in < 0) {
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
        return $this->quality <= 0;
    }

    protected function isSellInNegative() {
        return $this->sell_in < 0;
    }

    protected function increaseQuality(int $amount_to_increase = 1) {

        $this->quality = $this->quality + $amount_to_increase;
    }
}
