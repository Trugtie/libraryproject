<?php
class NewsModel
{
    private $id;
    private $newsImage;
    private $newsType;
    private $newsTitle;
    private $newsDescription;
    private $newsDateCreated;

    public function __construct($id, $newsImage, $newsType, $newsTitle, $newsDescription, $newsDateCreated)
    {
        $this->id = $id;
        $this->newsImage = $newsImage;
        $this->newsType = $newsType;
        $this->newsTitle = $newsTitle;
        $this->newsDescription = $newsDescription;
        $this->newsDateCreated = $newsDateCreated;
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getImage()
    {
        return $this->newsImage;
    }
    public function setImage($newsImage)
    {
        $this->newsImage = $newsImage;
    }

    public function getType()
    {
        return $this->newsType;
    }
    public function setType($newsType)
    {
        $this->newsType = $newsType;
    }

    public function getTitle()
    {
        return $this->newsTitle;
    }
    public function setTitle($newsTitle)
    {
        $this->newsTitle = $newsTitle;
    }

    public function getDescription()
    {
        return $this->newsDescription;
    }
    public function setDescription($newsDescription)
    {
        $this->newsDescription = $newsDescription;
    }

    public function getDateCreated()
    {
        return $this->newsDateCreated;
    }
    public function setDateCreated($newsDateCreated)
    {
        $this->newsDateCreated = $newsDateCreated;
    }
}
?>