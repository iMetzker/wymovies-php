<?php 
class User {

    public $id;
    public $name;
    public $lastname;
    public $email;
    protected $password;
    public $image;
    public $bio;
    public $token;

}

interface UserDAOInterface {

    public function buildUser($data);
    public function create(User $user, $authUser = false);
    public function update(User $user);
    public function verifyToken($protected = false);
    public function setTokenToSession($token, $redirect = true);
    public function authenticateUser($email, $password);
    public function changePassword(User $user);
    public function findByToken($token);
    public function findbyEmail($email);
    public function findById($id);

}