<?php
//header('Content-type: text/plain; charset=utf-8');
include ("../interface/IAction.php");
include ("../util/DPO.php");
include ("../model/CategoryBookModel.php");

class CategoryBookDao implements IAction{

    private $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function getAll(){
        $categoryBookArray=array();
        try{
            $sql = "SELECT * FROM quanlythuvien.categorybook";
            $stmt = $this->connection->query($sql,PDO::FETCH_ASSOC);
            $result=$stmt->fetchAll();

            foreach ($result as $value){
                $categoryBookModel=new CategoryBookModel($value["bid"], $value["nameCategory"]);
                array_push($categoryBookArray,$categoryBookModel);
            }
        }catch (PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
    return $categoryBookArray;
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
$categoryBookDao=new CategoryBookDao(DPO::getSession());
echo "<br/>";
var_dump($categoryBookDao->getAll());
?>


