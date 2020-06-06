<?php 

class Users {
    public $id;
    public $username;
    public $f_name;
    public $l_name;
    public $email;
    public $password;
    public $address;

    public $conn;

    function __construct($conn)
    {
        $this->conn = $conn;
    }

    function register() {
        if(!empty($this->username) && !empty($this->email) && !empty($this->password)) {
            $stmt = $this->conn->prepare("INSERT INTO user SET username=:username, f_name=:f_name, l_name=:l_name, email=:email, password=:password, address=:address");

            $this->username = htmlspecialchars(strip_tags($this->username));
            $this->f_name = htmlspecialchars(strip_tags($this->f_name));
            $this->l_name = htmlspecialchars(strip_tags($this->l_name));
            $this->email = htmlspecialchars(strip_tags($this->email));
            $this->password = $this->password;
            $this->address = htmlspecialchars(strip_tags($this->address));


            $stmt->bindParam(":username", $this->username);
            $stmt->bindParam(":f_name", $this->f_name);
            $stmt->bindParam(":l_name", $this->l_name);
            $stmt->bindParam(":email", $this->email);
            $stmt->bindParam(":password", $this->password);
            $stmt->bindParam(":address", $this->address);

            if ($stmt->execute()) {
                return true;
            }
            return false;
        }

        return false;
    }

    function login() {
        if (!empty($this->username)) {
            $stmt = $this->conn->prepare("SELECT * FROM user WHERE username=:username LIMIT 1");

            $this->username = htmlspecialchars(strip_tags($this->username));

            $stmt->bindParam(":username", $this->username);

            if($stmt->execute()) {
                return $stmt;
            } else {
                return false;
            }
        }
        return false;
    }

    function update() {
        $stmt = $this->conn->prepare("UPDATE user SET email=:email, address=:address WHERE id=:id");

        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->address = htmlspecialchars(strip_tags($this->address));

        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":address", $this->address);
        $stmt->bindParam(":id", $this->id);

        if($stmt->execute()){
            return true;
        } else {
            return false;
        }
        
        return false;
    }

    function random_string(){
        
    }

    function log_out() {

    }

    function update_password(){
        $stmt = $this->conn->prepare("UPDATE user SET password=:password WHERE id=:id");

        $this->id = htmlspecialchars(strip_tags($this->id));
        $this->password = $this->password;

        $stmt->bindParam(":password", $this->password);
        $stmt->bindParam(":id", $this->id);

        if($stmt->execute()){
            return true;
        } else {
            return false;
        }
        
        return false;
    }

    function delete() {
        $stmt = $this->conn->prepare("DELETE FROM user WHERE id=:id");

        $stmt->bindParam(":id", $this->id);

        if($stmt->execute()) {
            return true;
        }
        return false;
    }
}

?>