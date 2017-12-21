<?php

namespace PrintDate;

class DateTool
{
    private $defaultDate = null;

    public function __construct($defaultDate = null)
    {
        $this->defaultDate = $defaultDate;
    }

    public function now()
    {
        return (empty($this->defaultDate))
            ? $this->getCurrentDate()
            : $this->getDefaultDate()
        ;
    }

    protected function getDefaultDate()
    {
        return date($this->defaultDate);
    }

    protected function getCurrentDate()
    {
        return date("Y-m-d H:i:s");
    }
}