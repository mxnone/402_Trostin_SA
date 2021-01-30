<?php

namespace App;

class Vector
{
    private int $СoordinateX;
    private int $СoordinateY;
    private int $СoordinateZ;

    public function __construct(int $СoordinateX, int $СoordinateY, int $СoordinateZ)
    {
        if ($СoordinateX ==  0 && $СoordinateY ==  0 && $СoordinateZ ==  0) {
            echo "Одна из координат должна быть ненулевой!";
            exit();
        }

        $this->СoordinateX = $СoordinateX;
        $this->СoordinateY = $СoordinateY;
        $this->СoordinateZ = $СoordinateZ;
    }

    public function add(Vector $vector): Vector
    {
        $СoordinateX = $this->СoordinateX + $vector->СoordinateX;
        $СoordinateY = $this->СoordinateY + $vector->СoordinateY;
        $СoordinateZ = $this->СoordinateZ + $vector->СoordinateZ;

        return new Vector($СoordinateX, $СoordinateY, $СoordinateZ);
    }

    public function sub(Vector $vector): Vector
    {
        $СoordinateX = $this->СoordinateX - $vector->СoordinateX;
        $СoordinateY = $this->СoordinateY - $vector->СoordinateY;
        $СoordinateZ = $this->СoordinateZ - $vector->СoordinateZ;

        return new Vector($СoordinateX, $СoordinateY, $СoordinateZ);
    }

    public function product($number): Vector
    {
        $СoordinateX = $this->СoordinateX * $number;
        $СoordinateY = $this->СoordinateY * $number;
        $СoordinateZ = $this->СoordinateZ * $number;

        return new Vector($СoordinateX, $СoordinateY, $СoordinateZ);
    }

    public function scalarProduct(Vector $vector): int
    {
        $СoordinateX = $this->СoordinateX * $vector->СoordinateX;
        $СoordinateY = $this->СoordinateY * $vector->СoordinateY;
        $СoordinateZ = $this->СoordinateZ * $vector->СoordinateZ;

        $scalarProd = $СoordinateX + $СoordinateY + $СoordinateZ;

        return $scalarProd;
    }

    public function vectorProduct(Vector $vector): Vector
    {
        $СoordinateX = $this->СoordinateY * $vector->СoordinateZ - $this->СoordinateZ * $vector->СoordinateY;
        $СoordinateY = $this->СoordinateZ * $vector->СoordinateX - $this->СoordinateX * $vector->СoordinateZ;
        $СoordinateZ = $this->СoordinateX * $vector->СoordinateY - $this->СoordinateY * $vector->СoordinateX;;

        return new Vector($СoordinateX, $СoordinateY, $СoordinateZ);
    }

    public function __toString(): string
    {
        return "(".$this->СoordinateX.";".$this->СoordinateY.";".$this->СoordinateZ.")";
    }
}