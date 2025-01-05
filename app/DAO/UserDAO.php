<?php 

require_once("../models/user.php");

class UserDAO implements UserDAOInterface {

    private $conn;
    private $url;

    public function __construct(PDO $conn, $url){
        $this->conn = $conn;
        $this->url = $url;
    }

    public function buildUser($data){

    }

    public function create(User $user, $authUser = false){

    }

    public function update(User $user){

    }

    public function verifyToken($protected = false){

    }

    public function setTokenToSession($token, $redirect = true){

    }

    public function authenticateUser($email, $password){

    }

    public function changePassword(User $user){

    }

    public function findByToken($token){

    }

    public function findbyEmail($email){

    }

    public function findById($id){

    }
}

?>