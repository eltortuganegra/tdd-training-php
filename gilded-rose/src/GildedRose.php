<?php


namespace GildedRose;

class GildedRose
{
    private $items;
    const MAXIMUM_QUALITY = 50;
    const MINIMUM_QUALITY = 0;

    function __construct($items)
    {
        $this->items = $items;
    }

    function update_quality()
    {
        foreach ($this->items as $item) {
            if ($this->isItemASulfuras($item)) {

                continue;
            }

            if ($this->isItemAnAgedBrie($item)) {
                $this->update_aged_brie_item($item);
            } else if ($this->isItemABackstage($item)) {
                $this->update_backstage_item($item);
            } else {
                $this->update_item($item);
            }
        }
    }

    protected function incrementQuality($item)
    {
        return $item->quality = $item->quality + 1;
    }

    protected function decrementQuality($item)
    {
        $item->quality = $item->quality - 1;
    }

    protected function setToMinimumQuality($item)
    {
        $item->quality = $item->quality - $item->quality;
    }

    protected function isQualityLessThanMaximumQuality($item)
    {
        return $item->quality < self::MAXIMUM_QUALITY;
    }

    protected function isQualityGreaterThanZero($item)
    {
        return $item->quality > self::MINIMUM_QUALITY;
    }

    protected function isQualityLessThanMinimumQuality($item)
    {
        return $item->quality < self::MINIMUM_QUALITY;
    }

    protected function isItemABackstage($item)
    {
        return $item->name == 'Backstage passes to a TAFKAL80ETC concert';
    }

    protected function isItemASulfuras($item)
    {
        return $item->name == 'Sulfuras, Hand of Ragnaros';
    }

    protected function isSellInFiveOrLess($item)
    {
        return $item->sell_in < 6;
    }

    protected function isSellInTenOrLess($item)
    {
        return $item->sell_in < 11;
    }
    
    protected function isSellInLessThanZero($item)
    {
        return $item->sell_in < 0;
    }

    protected function isItemAnAgedBrie($item)
    {
        return $item->name == 'Aged Brie';
    }

    protected function decrementSellIn($item)
    {
        $item->sell_in = $item->sell_in - 1;
    }

    protected function update_aged_brie_item($item)
    {
        if ($this->isQualityLessThanMaximumQuality($item)) {
            $this->incrementQuality($item);
        }
        $this->decrementSellIn($item);
        if ($this->isSellInLessThanZero($item) && ($this->isQualityLessThanMaximumQuality($item))) {
            $this->incrementQuality($item);
        }
    }

    protected function update_backstage_item($item)
    {
        if ($this->isQualityLessThanMaximumQuality($item)) {
            $this->incrementQuality($item);
            if ($this->isSellInTenOrLess($item)) {
                $this->incrementQuality($item);
            }
            if ($this->isSellInFiveOrLess($item)) {
                $this->incrementQuality($item);
            }
        }
        $this->decrementSellIn($item);
        if ($this->isSellInLessThanZero($item)) {
            $this->setToMinimumQuality($item);
        }
    }

    protected function update_item($item)
    {
        $this->decrementSellIn($item);
        $this->decrementQuality($item);
        if ($this->isSellInLessThanZero($item)) {
            $this->decrementQuality($item);
        }
        if ($this->isQualityLessThanMinimumQuality($item)) {
            $this->setToMinimumQuality($item);
        }
    }
}