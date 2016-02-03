<?php


class Bookmark
{
    private $page;
    private $description;

    public function __construct($newPage, $newDescription)
    {
        $this->page = $newPage;
        $this->description = $newDescription;

    }

    public function showInfo()
    {
        echo("Zakladka na stronie $this->page z opisem $this->description <br>");
    }

}