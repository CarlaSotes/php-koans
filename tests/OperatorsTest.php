<?php

namespace Deg540\koans\Test;

use koans\Operator;
use PHPUnit\Framework\TestCase;

class OperatorsTest extends TestCase {
    /**
     * @test
     */
    public function declaresAsign(){
        // Preparación del test
        $variable = new Operator();
        // Ejecución del test
        $integerValue = $variable->declareAsign();
        // Validación
        $this->assertIsInt($integerValue);
    }

    /**
     * @test
     */
    public function declaresAdd(){
        // Preparación del test
        $variable = new Operator();
        // Ejecución del test
        $integerValue = $variable->declareAdd();
        // Validación
        $this->assertIsInt($integerValue);
    }

    /**
     * @test
     */
    public function declaresMultiply(){
        // Preparación del test
        $variable = new Operator();
        // Ejecución del test
        $integerValue = $variable->declareMultiply();
        // Validación
        $this->assertIsInt($integerValue);
    }

    /**
     * @test
     */
    public function declaresDivide(){
        // Preparación del test
        $variable = new Operator();
        // Ejecución del test
        $integerValue = $variable->declareDivide();
        // Validación
        $this->assertIsInt($integerValue);
    }

    /**
     * @test
     */
    public function declaresModule(){
        // Preparación del test
        $variable = new Operator();
        // Ejecución del test
        $integerValue = $variable->declareModule();
        // Validación
        $this->assertIsInt($integerValue);
    }
}
