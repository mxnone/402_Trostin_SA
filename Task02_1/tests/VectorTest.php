<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Vector;

class VectorTest extends TestCase
{
    public function testTextRepresentation()
    {
        $vector1 = new Vector(1, 0, 5);
        $this -> assertSame("(1; 0; 5)", $vector1 -> __toString());
    }

    public function testAdding()
    {
        $vector1 = new Vector(3, 4, 5);
        $vector2 = new Vector(2, 5, 8);
        $addVector = $vector1 -> add($vector2);
        $this -> assertEquals("(5; 9; 13)", $addVector -> __toString());
    }

    public function testSubtraction()
    {
        $vector1 = new Vector(10, 12, 3);
        $vector2 = new Vector(1, -5, 8);
        $subVector = $vector1 -> sub($vector2);
        $this -> assertEquals("(9; 17; -5)", $subVector -> __toString());
    }

    public function testProduct()
    {
        $vector1 = new Vector(1, -4, 8);
        $number = 5;
        $productVector = $vector1 -> product($number);
        $this -> assertEquals("(5; -20; 40)", $productVector -> __toString());
    }

    public function testScalarProduct()
    {
        $vector1 = new Vector(3, 4, 5);
        $vector2 = new Vector(2, 5, 8);
        $scalarProductVector = $vector1 -> scalarProduct($vector2);
        $this -> assertEquals(66, $scalarProductVector);
    }

    public function testVectorProduct()
    {
        $vector1 = new Vector(9, 1, -5);
        $vector2 = new Vector(0, -1, 2);
        $vectorProductVector = $vector1 -> vectorProduct($vector2);
        $this -> assertEquals("(-3; -18; -9)", $vectorProductVector -> __toString());
    }
}
