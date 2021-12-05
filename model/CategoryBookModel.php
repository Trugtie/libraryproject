<?php
class CategoryBookModel{
    private $id;
    private $nameCategory;

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->nameCategory = $name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getnameCategory()
    {
        return $this->nameCategory;
    }

    public function setnameCategory($nameCategory)
    {
        $this->nameCategory = $nameCategory;
    }
}
?>