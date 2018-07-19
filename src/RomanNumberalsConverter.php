<?php

class RomanNumberalsConverter
{
    protected static $lookup_array = [
        1000 => 'M',
        900 => 'CM',
        500 => 'D',
        400 => 'CD',
        100 => 'C',
        90 => 'XC',
        50 => 'L',
        40 => 'XL',
        10 => 'X',
        9 => 'IX',
        5 => 'V',
        4 => 'IV',
        1 => 'I',
    ];
    public function convert($number)
    {
        //arrange
        $roman_number = '';

        //act
        $this->guardAgainstInvalidNumber($number);
        foreach (static::$lookup_array as $decimal => $roman){
            while ($number >= $decimal ){
                $roman_number .= $roman;
                $number -= $decimal;
            }
        }

        return $roman_number;
    }

    /**
     * @param $number
     */
    private function guardAgainstInvalidNumber($number)
    {
        if ($number <= 0) {
            throw new InvalidArgumentException;
        }
    }

}