<?php
namespace koans;

class StringVariables {

    /**
     * @return string
     */
    public function declareDoubleQuotedString():string {
        $doubleQuoted = "hola";
        return $doubleQuoted;
    }

    /**
     * @return string
     */
    public function declareSingleQuotedString():string {
        $single = 'hola';
        return $single;
    }

    /**
     * @return string
     */
    public function declareEscapingQuotes() {
        $escaping = "hola\n";
        return $escaping;
    }

    /**
     * @return string
     */
    public function declareConcatenateStrings() {
        $string1 = "hola";
        $string2 = "adios";
        $concatenado = $string1 . $string2;
        return $concatenado;
    }

    /**
     * @return string
     */
    public function declareConcatenateVariables() {
        $string1 = "hola";
        $variable = 3;
        $concatenado = $string1 . $variable;
        return $concatenado;
    }

    public function declareAppendEndOfString() {
        $string = "Hola ";
        $string .= "Mundo!";
        return $string;
    }
}