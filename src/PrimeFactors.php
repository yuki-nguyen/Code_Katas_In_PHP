<?php

class PrimeFactors
{
    public function generate($number)
    {
        $primes = [];
/*      $candicate = 2;
        while ($number % $candicate == 0 ){
            $primes[] = $candicate;
            $number = $number/$candicate;
        }
*/
        for ($candicate = 2; $candicate <=$number; $candicate++){
            for (;$number % $candicate == 0; $number=$number/$candicate){
                $primes[] =$candicate;
            }
        }
        if ($number > 1){
            $primes[] = $number;
        }
        return $primes;
    }
}