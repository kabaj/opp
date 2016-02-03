<?php


class Circle extends Ksztalt
{
    protected $r;

    public function __construct($newX, $newY, $newKolor, $newR)
    {
        echo("Konstruktor Kola<br>");
        parent::__construct($newX, $newY, $newKolor);


        $this->setR($newR);
    }

    public function __destruct()
    {
        echo("Destruktor Kola<br>");
        parent::__destruct();
    }

    public function setR($newR)
    {
        if (is_int($newR) || is_float($newR)) {
            $this->r = $newR;
        } else {
            $this->r = 0;
        }
    }

    public function getR()
    {
        return $this->r;
    }

    public function getInfo()
    {
        parent::getInfo();
        echo("<h1>Kolo</h1>");
        echo("Promien: $this->r<br>");
    }

    public function getArea()
    {
        return (M_PI * pow($this->r, 2));

    }

    public function getPerimeter()
    {
        return (2 * M_PI * $this->r);
    }


}