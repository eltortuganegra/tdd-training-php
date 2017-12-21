<?php

namespace PrintDate;

class Printer {

    var $isPrinterExecuted = false;

    public function printString($date) {
        $this->isPrinterExecuted = true;
        echo $date;
    }

    public function isPrintStringExecuted()
    {
        return $this->isPrinterExecuted;
    }

}