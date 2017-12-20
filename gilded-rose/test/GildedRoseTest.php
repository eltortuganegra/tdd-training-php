<?php

namespace GildedRose\Test;

use GildedRose\GildedRose;

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


}
