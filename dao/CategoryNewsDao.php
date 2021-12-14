<?php
//header('Content-type: text/plain; charset=utf-8');
include("../interface/IAction.php");
include("../util/DPO.php");
include("../model/CategoryNewsModel.php");

class CategoryNewsDao implements IAction
{

    private $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function getAll()
    {
        $newsArray = array();
        try {
            $sql = "SELECT * FROM quanlythuvien.newscategories";
            $stmt = $this->connection->query($sql, PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();

            foreach ($result as $value) {
                $catNewsModel = new CategoryBookModel($value["id"], $value["name"]);
                array_push($newsArray, $catNewsModel);
            }
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        return $newsArray;
    }

    public function getById($id)
    {
        try {
            $sql = "SELECT * FROM quanlythuvien.newscategories WHERE id = $id";
            $stmt = $this->connection->query($sql, PDO::FETCH_ASSOC);
            $result = $stmt->fetchColumn();
            $catNewsModel = new CategoryBookModel($result["id"], $result["name"]);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        return $catNewsModel;
    }

    public function add($object)
    {
        try {
            $sql = "INSERT INTO quanlythuvien.newscategories (id, name)
            VALUES (?,?)";        
            $this->connection->prepare($sql)->execute([null, $object->getnewsNameCategory()]);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function update($object)
    {
        try {
            $sql = "UPDATE  quanlythuvien.newscategories SET name=? WHERE id=?";            
            $this->connection->prepare($sql)->execute([$object->getnewsNameCategory(), $object->getId()]);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function delete($id)
    {
        try {
            $sql = "DELETE FROM quanlythuvien.newscategories WHERE id=?";
            $this->connection->prepare($sql)->execute([$id]);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
$CategoryNewsDao = new CategoryNewsDao(DPO::getSession());
echo "<br/>";
var_dump($CategoryNewsDao->getAll());
