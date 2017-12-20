<?php

namespace GildedRose\Test;

use GildedRose\GildedRose;
use GildedRose\Item;

class GildedRoseTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function should_has_update_quality_method()
    {
        $items = array();
        $gildedRose = new GildedRose($items);

        $isUpdateQualityMethodDefined = method_exists($gildedRose, 'update_quality');

        $this->assertTrue($isUpdateQualityMethodDefined);
    }

    /**
     * @test
     */
    public function should_decrement_the_sellin_value_one_unit_when_it_update_quality()
    {
        $defaultSellinValue = 10;
        $defaultQualityValue = 10;
        $standardItem = new Item('standard', $defaultSellinValue, $defaultQualityValue);
        $items = array($standardItem);
        $gildedRose = new GildedRose($items);

        $gildedRose->update_quality();
        $decrementedValue = $defaultSellinValue - 1;
        $isSellinValueDecremented = ($standardItem->sell_in == $decrementedValue);

        $this->assertTrue($isSellinValueDecremented);
    }

}
