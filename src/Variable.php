<?php
    namespace koans;

    class Variable {

        /**
         * Metodo para crear un int
         * @return int
         */
        public function declareAnInt():int {
            $intVariable = 1;
            return $intVariable;
        }

        /**
         * Método para crear un booleano
         * @return bool
         */
        public function declareAnBoolean():bool {
            $boolVariable = true;
            return $boolVariable;
        }

        /**
         * Método para crear un float
         * @return float
         */
        public function declareAFloat():float {
            $floatVariable = 1.54;
            return $floatVariable;
        }

        /**
         * Método para crear un array
         * @return array
         */
        public function declareAnArray(): array {
            $arrayVariable = [2, 3, 4];
            return $arrayVariable;
        }

        /**
         * Método para crear un int nulo
         * @return int
         */
        public function declareAnIntWithNullValue():int {
            $nullInteger = null;
            return $nullInteger;
        }

        /**
         * Método para crear un booleano de un string
         * @return bool
         */
        public function declareAnStringIntoBoolean():bool {
            $boolCast = (Boolean) "true";
            return $boolCast;
        }


        public function declareDifferentValue(int $variable):int {
            $variable = $variable * 2;
            return $variable;
        }
    }
?>