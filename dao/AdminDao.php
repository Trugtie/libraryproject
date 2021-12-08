<?php
//header('Content-type: text/plain; charset=utf-8');
include ("../interface/IAction.php");
include ("../util/DPO.php");
include ("../model/AdminModel.php");

class AdminDao implements IAction{

    private $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function getAll(){
        $adminArray=array();
        try{
            $sql = "SELECT * FROM quanlythuvien.admin";
            $stmt = $this->connection->query($sql,PDO::FETCH_ASSOC);
            $result=$stmt->fetchAll();

            foreach ($result as $value){
                $adminModel=new AdminModel($value["aid"], $value["fullname"], $value["username"], $value["password"], $value["email"]);
                array_push($adminArray,$adminModel);
            }
        }catch (PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
    return $adminArray;
    }

    public function getById($id)
    {

    }

    public function add($object)
    {
        // TODO: Implement add() method.
    }

    public function update($object)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }
}
$adminDao=new AdminDao(DPO::getSession());
echo "<br/>";
var_dump($adminDao->getAll());
?>


