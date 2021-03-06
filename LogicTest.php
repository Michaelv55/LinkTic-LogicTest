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

    /**
     * Convierte un texto a UpperCamelCase
     *
     * @param string $text
     * @return string
     */
    public static function toUpperCamelCase(string $text) {
        return preg_replace('/\s+/', '', 
            ucwords(preg_replace('/-|_|\s+/', ' ', $text))
        );
    }

    /**
     * Invierte los caracteres de las palabras con mas de cierta cantidad de letras
     *
     * @param string $text
     * @param integer $numberOfLetters
     * @return string
     */
    public static function reverseWords(string $text, int $numberOfLetters = 5){
        return preg_replace_callback('/\b\w{'.($numberOfLetters+1).',}\b/', function($matches){
            return strrev($matches[0]);
        }, $text);
    }

}