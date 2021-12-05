<?php
class PaySlipModel{
    private $id;
    private $payDate;
    private $id_LoanSlip;
    private $id_Admin;

    /**
     * @param $id
     * @param $payDate
     * @param $id_LoanSlip
     * @param $id_Admin
     */
    public function __construct($id, $payDate, $id_LoanSlip, $id_Admin)
    {
        $this->id = $id;
        $this->payDate = $payDate;
        $this->id_LoanSlip = $id_LoanSlip;
        $this->id_Admin = $id_Admin;
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
    public function getPayDate()
    {
        return $this->payDate;
    }

    /**
     * @param mixed $payDate
     */
    public function setPayDate($payDate): void
    {
        $this->payDate = $payDate;
    }

    /**
     * @return mixed
     */
    public function getIdLoanSlip()
    {
        return $this->id_LoanSlip;
    }

    /**
     * @param mixed $id_LoanSlip
     */
    public function setIdLoanSlip($id_LoanSlip): void
    {
        $this->id_LoanSlip = $id_LoanSlip;
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



}