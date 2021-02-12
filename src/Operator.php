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

    /**
     * @return int
     */
    public function declareModule() {
        $a = 5;
        $b = $a;
        return $b % $a;
    }

    /**
     * @return bool
     */
    public function declareGreater() {
        $a = 5;
        $b = 6;
        return ($b > $a);
    }

    /**
     * @return bool
     */
    public function declareLess() {
        $a = 5;
        $b = 4;
        return ($b > $a);
    }

    public function declareLessEqual() {
        $a = 5;
        $b = 4;
        return ($b >= $a);
    }

    public function declareGreaterEqual() {
        $a = 5;
        $b = 6;
        return ($b >= $a);
    }
}