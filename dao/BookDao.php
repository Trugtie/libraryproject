<?php
//header('Content-type: text/plain; charset=utf-8');
include ("../interface/IAction.php");
include ("../util/DPO.php");
include ("../model/BookModel.php");

class BookDao implements IAction{

    private $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function getAll(){
        $bookArray=array();
        try{
            $sql = "SELECT * FROM quanlythuvien.book";
            $stmt = $this->connection->query($sql,PDO::FETCH_ASSOC);
            $result=$stmt->fetchAll();

            foreach ($result as $value){
                $bookModel=new BookModel($value["bid"], $value["title"], $value["author"], $value["description"], $value["status"], $value["release"]);
                array_push($bookArray,$bookModel);
            }
        }catch (PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
    return $bookArray;
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
$bookDao=new BookDao(DPO::getSession());
echo "<br/>";
var_dump($bookDao->getAll());
?>


