<?php

class BigInteger
{
    public function add($num1, $num2) {
        if (strlen($num1) > strlen($num2)) {
            $padLength = strlen($num1);
            $padInt = str_pad($num2, $padLength, '0', STR_PAD_LEFT);
            $result = $this->sum($num1, $padInt);
            return $result;
        } elseif (strlen($num1) < strlen($num2)) {
            $padLength = strlen($num2);
            $padInt = str_pad($num1, $padLength, '0', STR_PAD_LEFT);
            $result = $this->sum($num2, $padInt);
            return $result;
        }
        $result = $this->sum($num2, $num1);
        return $result;
    }


    private function sum($larger, $padInt){
        $result = '';
        $len = strlen($larger);
        $rest = 0;

        for ($i = $len; $i > 0; $i--) {
            $a = substr($larger, $i - 1, 1);
            $b = substr($padInt, $i - 1, 1);
            $a = $a + $rest;
            if (($a + $b) >= 10) {
                $rest = 1;
                if ($i != 1) {
                    $sum = substr(($a + $b), 1);
                } else {
                    $sum = $a + $b;
                }
            } else {
                $rest = 0;
                $sum = $a + $b;
            }

            $result = $sum . $result;
        }
        return $result;
    }


}