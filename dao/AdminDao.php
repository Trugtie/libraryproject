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

    public function add($object){
        var_dump($object);
            try{
                $sql = "INSERT INTO quanlythuvien.admin (username, password, fullname, email) VALUES (?,?,?,?)";
                $stmt = $this->connection->prepare($sql);
                $stmt->execute([$object->getUsername(), $object->getPassword(), $object->getFullName(),$object->getEmail()]);
            }catch (PDOException $e){
                echo "Connection failed: " . $e->getMessage();
            } finally {
        }
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
//$adminDao=new AdminDao(DPO::getSession());
//echo "<br/>";
//echo "Sau khi thêm";
//$adminDao->add(new AdminModel(null,"Tran Dai Nha","nha223","12345678","nha223@gmail.com"));
////var_dump($adminDao->getAll());
//DPO::closeSession();
?>


