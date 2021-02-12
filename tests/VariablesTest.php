<?php

namespace Deg540\koans\Test;

use koans\Variable;
use PHPUnit\Framework\TestCase;

class VariablesTest extends TestCase{
    /**
     * @test
     */
    public function declaresAnInt(){
        // Preparación del test
        $variable = new Variable();
        // Ejecución del test
        $integerValue = $variable->declareAnInt();
        // Validación
        $this->assertIsInt($integerValue);
    }

    /**
     * @test
     */
    public function declaresAnBoolean(){
        // Preparación del test
        $variable = new Variable();
        // Ejecución del test
        $booleanValue = $variable->declareAnBoolean();
        // Validación
        $this->assertIsBool($booleanValue);
    }

    /**
     * @test
     */
    public function declaresAFloat(){
        // Preparación del test
        $variable = new Variable();
        // Ejecución del test
        $floatalue = $variable->declareAFloat();
        // Validación
        $this->assertIsFloat($floatalue);
    }

    /**
     * @test
     */
    public function declaresAnArray(){
        // Preparación del test
        $variable = new Variable();
        // Ejecución del test
        $arrayValue = $variable->declareAnArray();
        // Validación
        $this->assertIsArray($arrayValue);
    }

    /**
     * @test
     */
    public function declaresAnIntWithNullValue(){
        // Preparación del test
        $variable = new Variable();
        // Ejecución del test
        $intNullValue = $variable->declareAnIntWithNullValue();
        // Validación
        $this->assertNull($intNullValue);
    }

    /**
     * @test
     */
    public function declaresDifferentValue(){
        // Preparación del test
        $variable = new Variable();
        // Ejecución del test
        $intDiffValue = $variable->declareDifferentValue(3);
        // Validación
        $this->assertNotSame(7, $intDiffValue); // esperamos un 6
    }

    /**
     * @test
     */
    public function declaresAnStringIntoBoolean(){
        // Preparación del test
        $variable = new Variable();
        // Ejecución del test
        $intNullValue = $variable->declareAnStringIntoBoolean();
        // Validación
        $this->assertIsBool($intNullValue);
    }
}
