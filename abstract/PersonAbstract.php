<?php
abstract class PersonAbstract{
    private $id;
    private $fullName;
    private $username;
    private $password;
    private $email;

    /**
     * @param $id
     * @param $fullName
     * @param $username
     * @param $password
     * @param $email
     */
    public function __construct($id, $fullName, $username, $password, $email)
    {
        $this->id = $id;
        $this->fullName = $fullName;
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
    }


    public function __toString()
    {
        return "{ id = " . $this->id . ", fullname = " . $this->fullName
        . ", username = " . $this->username . ", password = " . $this->password
        . ", email = " . $this->email . "}, ";
    }

}
