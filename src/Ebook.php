<?php

class Ebook extends Book
{
    protected $sizeINMB;

    public function printBookInfo()
    {
        echo('Print book info');
        parent::printBookInfo();
    }


    public function setName($newName)
    {
        parent::setName($newName . " - wersja cyfrowa");
    }

}