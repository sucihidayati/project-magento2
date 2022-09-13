<?php

namespace Lime\Sample\Block;


use Magento\Framework\View\Element\Template;

class Hello extends Template
{
    public function getText()
    {
        return "Hello World";
    }
}
