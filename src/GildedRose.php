<?php

namespace Runroom\GildedRose;

use Runroom\GildedRose\Items\Item;

class GildedRose {

    /**
     * @var array<Item>
     */
    private array $items;

    /**
     * GildedRose constructor.
     * @param array<Item> $items
     */
    function __construct(array $items) {
        $this->items = $items;
    }

    function update_quality(): void {
        foreach ($this->items as $item) {
            $item->updateItem();
        }
    }
}
