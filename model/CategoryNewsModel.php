<?php
class CategoryBookModel{
    private $id;
    private $newsNameCategory;

    public function __construct($id, $newsNameCategory)
    {
        $this->id = $id;
        $this->newsNameCategory = $newsNameCategory;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getnewsNameCategory()
    {
        return $this->newsNameCategory;
    }

    public function setnewsNameCategory($newsNameCategory)
    {
        $this->newsNameCategory = $newsNameCategory;
    }
}
