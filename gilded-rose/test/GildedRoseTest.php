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

    /**
     * @test
     */
    public function should_decrement_the_quality_value_one_unit_when_it_update_quality()
    {
        $defaultSellinValue = 10;
        $defaultQualityValue = 10;
        $standardItem = new Item('standard', $defaultSellinValue, $defaultQualityValue);
        $items = array($standardItem);
        $gildedRose = new GildedRose($items);

        $gildedRose->update_quality();
        $decrementedValue = $defaultQualityValue - 1;
        $isQualityValueDecremented = ($standardItem->quality == $decrementedValue);

        $this->assertTrue($isQualityValueDecremented);
    }

    /**
     * @test
     */
    public function should_decrement_the_quality_value_two_units_when_sell_has_passed()
    {
        $defaultSellinValue = 0;
        $defaultQualityValue = 10;
        $standardItem = new Item('standard', $defaultSellinValue, $defaultQualityValue);
        $items = array($standardItem);
        $gildedRose = new GildedRose($items);

        $gildedRose->update_quality();
        $decrementedValue = $defaultQualityValue - 2;
        $isQualityValueDecremented = ($standardItem->quality == $decrementedValue);

        $this->assertTrue($isQualityValueDecremented);
    }

    /**
     * @test
     */
    public function should_not_decrement_quality_less_than_zero()
    {
        $defaultSellinValue = 10;
        $defaultQualityValue = 0;
        $standardItem = new Item('standard', $defaultSellinValue, $defaultQualityValue);
        $items = array($standardItem);
        $gildedRose = new GildedRose($items);

        $gildedRose->update_quality();
        $zeroQualityValue = 0;
        $isQualityZero = ($standardItem->quality == $zeroQualityValue);

        $this->assertTrue($isQualityZero);
    }

    /**
     * @test
     */
    public function should_increases_quality_of_aged_brie_item_the_older_it_gets()
    {
        $defaultSellinValue = 10;
        $defaultQualityValue = 10;
        $standardItem = new Item('Aged Brie', $defaultSellinValue, $defaultQualityValue);
        $items = array($standardItem);
        $gildedRose = new GildedRose($items);

        $gildedRose->update_quality();
        $increasedQualityValue = $defaultQualityValue + 1;
        $isQualityIncremented = ($standardItem->quality == $increasedQualityValue);

        $this->assertTrue($isQualityIncremented);
    }

    /**
     * @test
     */
    public function should_increases_quality_up_to_a_maximum_of_fifty_units()
    {
        $defaultSellinValue = 10;
        $maximumQualityValue = 50;
        $standardItem = new Item('Aged Brie', $defaultSellinValue, $maximumQualityValue);
        $items = array($standardItem);
        $gildedRose = new GildedRose($items);

        $gildedRose->update_quality();
        $isNotTheQualityIncremented = ($standardItem->quality == $maximumQualityValue);

        $this->assertTrue($isNotTheQualityIncremented);
    }

    /**
     * @test
     */
    public function should_not_increases_quality_for_Sulfuras_item()
    {
        $defaultSellinValue = 10;
        $standardQualityValue = 10;
        $standardItem = new Item('Sulfuras, Hand of Ragnaros', $defaultSellinValue, $standardQualityValue);
        $items = array($standardItem);
        $gildedRose = new GildedRose($items);

        $gildedRose->update_quality();
        $isNotTheQualityIncremented = ($standardItem->quality == $standardQualityValue);

        $this->assertTrue($isNotTheQualityIncremented);
    }

}
