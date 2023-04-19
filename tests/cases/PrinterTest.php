<?php

use BellwethercoffeeSw\EchoModule\Printer;
use PHPUnit\Framework\TestCase;

class PrinterTest extends TestCase
{
    public function testPrint()
    {
        // Prepare
        $printer = new Printer;
        $string = 'Hi sam';
        // Run
        ob_start();
        $printer->print($string);
        $output = ob_get_clean();
        // Assert
        $this->assertEquals($string, $output);
    }
}