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

    /**
     * @test
     */
    public function declaresEquals(){
        // Preparación del test
        $variable = new Operator();
        // Ejecución del test
        $igual = $variable->declareAsign();
        // Validación
        $this->assertEquals($igual,5);
    }

    /**
     * @test
     */
    public function declaresNotEquals(){
        // Preparación del test
        $variable = new Operator();
        // Ejecución del test
        $igual = $variable->declareAsign();
        // Validación
        $this->assertNotEquals($igual,3);
    }

    /**
     * @test
     */
    public function declaresGreater(){
        // Preparación del test
        $variable = new Operator();
        // Ejecución del test
        $igual = $variable->declareGreater();
        // Validación
        $this->assertIsBool($igual);
    }

    /**
     * @test
     */
    public function declaresLess(){
        // Preparación del test
        $variable = new Operator();
        // Ejecución del test
        $igual = $variable->declareLess();
        // Validación
        $this->assertIsBool($igual);
    }

    /**
     * @test
     */
    public function declaresLessEqual(){
        // Preparación del test
        $variable = new Operator();
        // Ejecución del test
        $igual = $variable->declareLessEqual();
        // Validación
        $this->assertIsBool($igual);
    }

    /**
     * @test
     */
    public function declaresGreaterEqual(){
        // Preparación del test
        $variable = new Operator();
        // Ejecución del test
        $igual = $variable->declareGreaterEqual();
        // Validación
        $this->assertIsBool($igual);
    }
}
