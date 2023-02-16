<?php

declare(strict_types=1);

namespace Test;

use Kata\LCDDigits;
use PHPUnit\Framework\TestCase;

require __DIR__ . '/../vendor/autoload.php';

class LCDDigitsTest extends TestCase
{
    public function testSingleDigit(): void
    {
        $lcdDigits = new LCDDigits();

        $expected = <<<TXT
 _ 
| |
|_|
TXT;

        $this->assertEquals($expected, $lcdDigits('0'));
    }

    public function testDoubleDigit(): void
    {
        $lcdDigits = new LCDDigits();

        $expected = <<<TXT
    _ 
|_| _|
  ||_ 
TXT;

        $this->assertEquals($expected, $lcdDigits('42'));
    }

    public function testLongDigit(): void
    {
        $lcdDigits = new LCDDigits();

        $expected = <<<TXT
 _  _     _  _  _  _ 
|_||_|  ||_  _|  ||_ 
|_|  |  ||_| _|  | _|
TXT;

        $this->assertEquals($expected, $lcdDigits('8916375'));
    }
}
