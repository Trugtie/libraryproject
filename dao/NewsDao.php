<?php
//header('Content-type: text/plain; charset=utf-8');
include("../interface/IAction.php");
include("../util/DPO.php");
include("../model/NewsModel.php");

class NewsDao implements IAction
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
            $sql = "SELECT * FROM quanlythuvien.news";
            $stmt = $this->connection->query($sql, PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();

            foreach ($result as $value) {
                $newsModel = new NewsModel($value["id"], $value["image"], $value["type"], $value["title"], $value["description"], $value["datenews"], $value["aid"]);
                array_push($newsArray, $newsModel);
            }
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        return $newsArray;
    }

    public function getById($id)
    {
        try {
            $sql = "SELECT * FROM quanlythuvien.news WHERE news_id = $id";
            $stmt = $this->connection->query($sql, PDO::FETCH_ASSOC);
            $result = $stmt->fetchColumn();
            $newsModel = new NewsModel($result["id"], $result["image"], $result["type"], $result["title"], $result["description"], $result["datenews"], $result["aid"]);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        return $newsModel;
    }

    public function add($object)
    {
        try {
            $sql = "INSERT INTO quanlythuvien.news (id, image, type, title, description, datenews,aid)
            VALUES (?,?,?,?,?,?,?)";        
            $this->connection->prepare($sql)->execute([null, $object->getImage(), $object->getType(), $object->getTitle(), $object->getDescription(), $object->getDateCreated(), $object->getAid()]);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function update($object)
    {
        try {
            $sql = "UPDATE  quanlythuvien.news SET image=?, type=?, title=?, description=?, datenews=?, aid=? WHERE id=?";            
            $this->connection->prepare($sql)->execute([$object->getImage(), $object->getType(), $object->getTitle(), $object->getDescription(), $object->getDateCreated(), $object->getAid(), $object->getId()]);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function delete($id)
    {
        try {
            $sql = "DELETE FROM quanlythuvien.news WHERE id=$id";
            $this->connection->prepare($sql)->execute();
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
$NewsDao = new NewsDao(DPO::getSession());
echo "<br/>";
var_dump($NewsDao->getAll());
