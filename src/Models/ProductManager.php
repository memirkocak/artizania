<?php
namespace MVC\Models;

use MVC\Models\Product;
/** Class ProductManager **/
class ProductManager {

    private $bdd;

    public function __construct() {
        $this->bdd = new \PDO('mysql:host='.HOST.';dbname=' . DATABASE . ';charset=utf8;' , USER, PASSWORD);
        $this->bdd->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function getBdd()
    {
        return $this->bdd;
    }


    public function all() {
        $stmt = $this->bdd->query('SELECT * FROM Product');

        return $stmt->fetchAll(\PDO::FETCH_CLASS,"MVC\Models\Product");
    }

    public function store($name, $description, $image, $price, $category) {
        $stmt = $this->bdd->prepare("INSERT INTO Product(id, name, description, image, price, category) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute(array(
            uniqid(),
            $name,
            $description,
            $image,
            $price,
            $category
        ));
    }

    public function getAllUsers() {
        $stmt = $this->bdd->prepare("SELECT * FROM user ORDER BY id ASC");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findById($id) {
        $stmt = $this->bdd->prepare("SELECT * FROM user WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function updateAdminStatus($userId, $status) {
        $stmt = $this->bdd->prepare("UPDATE user SET admin = ? WHERE id = ?");
        return $stmt->execute([$status, $userId]);
    }
}
