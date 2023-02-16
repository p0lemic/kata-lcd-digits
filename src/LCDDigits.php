<?php

declare(strict_types=1);

namespace Kata;

class LCDDigits
{
    private const LCD_STRING = [
        [' _ ', '   ', ' _ ', ' _ ', '   ', ' _ ', ' _ ', ' _ ', ' _ ', ' _ ',],
        ['| |', '  |', ' _|', ' _|', '|_|', '|_ ', '|_ ', '  |', '|_|', '|_|',],
        ['|_|', '  |', '|_ ', ' _|', '  |', ' _|', '|_|', '  |', '|_|', '  |',],
    ];

    public function __invoke(string $number): string
    {
        $output = ['', '', ''];

        foreach(str_split($number) as $digit) {
            for ($i = 0; $i < 3; $i++) {
                $output[$i] .= self::LCD_STRING[$i][$digit];
            }
        }

        return implode(PHP_EOL, $output);
    }
}
