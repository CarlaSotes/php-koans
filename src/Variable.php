<?php
    namespace koans;


    use phpDocumentor\Reflection\Types\Boolean;

    class Variable {

        /**
         * Metodo para crear un int
         * @return int
         */
        public function declareAnInt() {
            $intVariable = 1;
            return $intVariable;
        }

        /**
         * Método para crear un booleano
         * @return bool
         */
        public function declareAnBoolean() {
            $boolVariable = true;
            return $boolVariable;
        }

        /**
         * Método para crear un float
         * @return float
         */
        public function declareAFloat() {
            $floatVariable = 1.54;
            return $floatVariable;
        }

        /**
         * Método para crear un array
         * @return array
         */
        public function declareAnArray()
        {
            $arrayVariable = [2, 3, 4];
            return $arrayVariable;
        }

        /**
         * Método para crear un int nulo
         * @return int
         */
        public function declareAnIntWithNullValue() {
            $nullInteger = null;
            return $nullInteger;
        }

        /**
         * Método para crear un booleano de un string
         * @return bool
         */
        public function declareAnStringIntoBoolean() {
            $boolCast = (Boolean) "true";
            return $boolCast;
        }


        public function declareDifferentValue(int $variable) {
            $variable = $variable * 2;
            return $variable;
        }
    }
?>