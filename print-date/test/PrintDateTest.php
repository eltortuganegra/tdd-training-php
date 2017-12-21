<?php

namespace PrintDate\Test;

use PrintDate\DateTool;
use PrintDate\PrintDate;
use PrintDate\Printer;

class PrintDateTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_test_if_print_date_prints_the_current_date()
    {
        // Arrange
        $cannedCurrentDate = '2018-01-01 00:00:00';
        $dateTool = new DateTool($cannedCurrentDate);
        $printer = new Printer();
        $printDate = new PrintDate($dateTool, $printer);

        //Act
        $printDate->printCurrentDate();
        $isPrintStringExecuted = $printer->isPrintStringExecuted();

        //Assert
        $this->assertEquals($cannedCurrentDate, $dateTool->now());
        $this->assertTrue($isPrintStringExecuted);
    }

}