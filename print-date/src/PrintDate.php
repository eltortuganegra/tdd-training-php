<?php

namespace PrintDate;

class PrintDate
{
    protected $dateTool = null;
    protected $printer = null;

    public function __construct(DateTool $dateTool, Printer $printer)
    {
        $this->dateTool = $dateTool;
        $this->printer = $printer;
    }

    public function printCurrentDate()
    {
        $this->printer->printString($this->dateTool->now());
    }
}