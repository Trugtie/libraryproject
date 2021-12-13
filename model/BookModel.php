<?php

class BookModel{
    private $id;
    private $bookTitle;
    private $author;
    private $bookDescription;
    private $bookStatus;
    private $releaseDate;


    public function __construct($id, $title, $author, $desc, $status, $release)
    {
        $this->id = $id;
        $this->bookTitle = $title;
        $this->author = $author;
        $this->bookDescription = $desc;
        $this->bookStatus = $status;
        $this->releaseDate = $release;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getbookTitle()
    {
        return $this->bookTitle;
    }

    public function setbookTitle($bookTitle)
    {
        $this->bookTitle = $bookTitle;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function getbookDescription()
    {
        return $this->bookDescription;
    }

    public function setbookDescription($bookDescription)
    {
        $this->bookDescription = $bookDescription;
    }

    public function getbookStatus()
    {
        return $this->bookStatus;
    }

    public function setbookStatus($bookStatus)
    {
        $this->bookStatus = $bookStatus;
    }

    public function getreleaseDate()
    {
        return $this->releaseDate;
    }

    public function setreleaseDate($releaseDate)
    {
        $this->releaseDate = $releaseDate;
    }

}

?>