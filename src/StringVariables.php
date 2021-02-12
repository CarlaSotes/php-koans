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
        $concatenado = "hola" . "adios";
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

    /**
     * @return string
     */
    public function declareAppendEndOfString() {
        $string = "Hola ";
        $string .= "Mundo!";
        return $string;
    }

    /**
     * @return int
     */
    public function declareLengthOfString() {
        $tamanio = strlen("hola");
        return $tamanio;
    }

    /**
     * @return int|string[]
     */
    public function declareCountWordsInAString():int {
        $contar = str_word_count("hola que tal");
        return $contar;
    }

    /**
     * @return string
     */
    public function declareReverseAString():string {
        $revertir = strrev("hola mundo");
        return  $revertir;
    }

    /**
     * @param $palabra
     * @return bool
     */
    public function declareSearch($palabra):bool {
        $contiene = strpos($palabra,"hola que tal");
        return $contiene;
    }

    public function declareReplace():string {
        $remplazar = str_replace("hola", "adios", "hola mundo");
        return $remplazar;
    }
}