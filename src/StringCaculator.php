<?php

class StringCaculator
{
    const MAX_NUMBER_TO_CACULATE = 1000;

    public function add($string)
    {
        $result =0;
        foreach(explode(',',$string) as $number){
            $this->guardAgainstNegativeNumbers($number);
            $number = $this->getNumberFromStringHavingNewLineWord($number);
            if (intval($number) >= self::MAX_NUMBER_TO_CACULATE){
                continue;
            }

            $result +=intval($number);
        }
        return $result;
    }

    /**
     * @param $number
     */
    private function guardAgainstNegativeNumbers($number)
    {
        if (intval($number) < 0) {
            throw new InvalidArgumentException;
        }
    }

    /**
     * @param $number
     * @return mixed
     */
    public function getNumberFromStringHavingNewLineWord($number)
    {
        if (strpos($number, '\n') == false) {
            $number = str_replace('\n', '', $number);
        }
        return $number;
    }
}
