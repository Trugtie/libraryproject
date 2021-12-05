<?php
class LoanSlipModel{
    private $id;
    private $borrowedDate;
    private $id_User;
    private $id_Admin;
    private $id_Book;

    /**
     * @param $id
     * @param $borrowedDate
     * @param $id_User
     * @param $id_Admin
     * @param $id_Book
     */
    public function __construct($id, $borrowedDate, $id_User, $id_Admin, $id_Book)
    {
        $this->id = $id;
        $this->borrowedDate = $borrowedDate;
        $this->id_User = $id_User;
        $this->id_Admin = $id_Admin;
        $this->id_Book = $id_Book;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getBorrowedDate()
    {
        return $this->borrowedDate;
    }

    /**
     * @param mixed $borrowedDate
     */
    public function setBorrowedDate($borrowedDate): void
    {
        $this->borrowedDate = $borrowedDate;
    }

    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->id_User;
    }

    /**
     * @param mixed $id_User
     */
    public function setIdUser($id_User): void
    {
        $this->id_User = $id_User;
    }

    /**
     * @return mixed
     */
    public function getIdAdmin()
    {
        return $this->id_Admin;
    }

    /**
     * @param mixed $id_Admin
     */
    public function setIdAdmin($id_Admin): void
    {
        $this->id_Admin = $id_Admin;
    }

    /**
     * @return mixed
     */
    public function getIdBook()
    {
        return $this->id_Book;
    }

    /**
     * @param mixed $id_Book
     */
    public function setIdBook($id_Book): void
    {
        $this->id_Book = $id_Book;
    }



}