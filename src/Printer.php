<?php

namespace BellwethercoffeeSw\EchoModule;

class Printer
{
    public function print($data = null, $function = 'echo')
    {
        switch ($function) {
            case 'print':
                print_r($data);
                break;
            default:
                echo (string)$data;
                break;
        }
    }
}