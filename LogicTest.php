<?php

class LogicTest{

    /**
     * Suma de múltiplos dentro de un rango límite
     *
     * @param integer $limit
     * @param integer ...$multiples
     * @return int
     */
    public static function sumOfMultiples(int $limit, int ...$multiples){
        if(count($multiples) <= 0){
            return 0;
        }

        $result = 0;
        $number = array_shift($multiples);

        for ($i=1; $i <= intdiv(($limit-1), $number); $i++) { 
            $result += $number*$i;
        }
        return $result + LogicTest::sumOfMultiples($limit, ...$multiples);
    }
}