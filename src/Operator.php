<?php


namespace koans;


class Operator {
    /**
     * @return int
     */
    public function declareAdd() {
        $a = 5;
        $b = $a;
        return $b+$a;
    }

    /**
     * @return int
     */
    public function declareAsign() {
        $a = 5;
        $b = $a;
        return $b;
    }

    /**
     * @return float|int
     */
    public function declareMultiply() {
        $a = 5;
        $b = $a;
        return $b*$a;
    }

    /**
     * @return float|int
     */
    public function declareDivide() {
        $a = 5;
        $b = $a;
        return $b/$a;
    }

    public function declareModule() {
        $a = 5;
        $b = $a;
        return $b % $a;
    }
}