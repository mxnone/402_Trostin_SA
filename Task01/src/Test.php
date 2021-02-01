<?php

namespace App\Test;

use App\Vector;

function runTest()
{
    $vector1 = new Vector(3, 4, 5);
    echo "Vector1:". $vector1 . "\n";    

    $vector2 = new Vector(2, 5, 8);
    echo "Vector2:". $vector2 . "\n";    

    $vectorResultAdd = $vector1->add($vector2);
    echo 'VectorResultAdd:'.$vectorResultAdd . "\n"; 

    $vector3 = new Vector(10, 12, 3);
    echo "Vector1:". $vector3 . "\n";    

    $vector4 = new Vector(1, -5, 8);
    echo "Vector2:". $vector4 . "\n"; 

    $vectorResultSub = $vector3->sub($vector4);
    echo 'VectorResultSub:'.$vectorResultSub . "\n"; 
    
    $vector5 = new Vector(1, -4, 8);
    echo "Vector:". $vector5 . "\n";    

    $number = 5;
    echo "Number:". $number . "\n"; 

    $vectorResultProduct = $vector5->product($number);
    echo 'VectorResultProduct:'.$vectorResultProduct . "\n"; 

    $vector6 = new Vector(3, 4, 5);
    echo "Vector1:".$vector6 . "\n";    

    $vector7 = new Vector(2, 5, 8);
    echo "Vector2:".$vector7 . "\n"; 

    $vectorResultScalarProduct = $vector6->scalarProduct($vector7);
    echo 'VectorResultScalarProduct:'.$vectorResultScalarProduct . "\n";

    $vector8 = new Vector(9, 1, -5);
    echo "Vector1:". $vector8 . "\n";    

    $vector9 = new Vector(0, -1, 2);
    echo "Vector2:". $vector9 . "\n"; 

    $vectorResultVectorProduct = $vector8->vectorProduct($vector9);
    echo 'VectorResultVectorProduct:'.$vectorResultVectorProduct . "\n";
}
?>