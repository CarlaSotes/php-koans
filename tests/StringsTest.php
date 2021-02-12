<?php

namespace Deg540\koans\Test;

use koans\StringVariables;
use PHPUnit\Framework\TestCase;

class StringsTest extends TestCase {
    /**
     * @test
     */
    public function declaresDoubleQuotedString(){
        // Preparación del test
        $variable = new StringVariables();
        // Ejecución del test
        $double = $variable->declareDoubleQuotedString();
        // Validación
        $this->assertIsString($double);
    }

    /**
     * @test
     */
    public function declaresSingleQuotedString(){
        // Preparación del test
        $variable = new StringVariables();
        // Ejecución del test
        $single = $variable->declareSingleQuotedString();
        // Validación
        $this->assertIsString($single);
    }

    /**
     * @test
     */
    public function declaresEscapingQuotes(){
        // Preparación del test
        $variable = new StringVariables();
        // Ejecución del test
        $escaping = $variable->declareEscapingQuotes();
        // Validación
        $this->assertIsString($escaping);
    }

    /**
     * @test
     */
    public function declaresConcatenateStrings(){
        // Preparación del test
        $variable = new StringVariables();
        // Ejecución del test
        $concaten = $variable->declareConcatenateStrings();
        // Validación
        $this->assertIsString($concaten);
    }

    /**
     * @test
     */
    public function declaresConcatenateVariables(){
        // Preparación del test
        $variable = new StringVariables();
        // Ejecución del test
        $concaten = $variable->declareConcatenateVariables();
        // Validación
        $this->assertIsString($concaten);
    }

    /**
     * @test
     */
    public function declaresAppendEndOfString(){
        // Preparación del test
        $variable = new StringVariables();
        // Ejecución del test
        $append = $variable->declareAppendEndOfString();
        // Validación
        $this->assertIsString($append);
    }
}
