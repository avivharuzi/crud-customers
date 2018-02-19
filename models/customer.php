<?php

class Customer {
    private $Id;
    private $FirstName;
    private $LastName;
    private $Email;
    private $Gender;

    public function __construct() {
        if (func_num_args() > 0) {
            $this->Id        = func_get_arg(0);
            $this->FirstName = func_get_arg(1);
            $this->LastName  = func_get_arg(2);
            $this->Email     = func_get_arg(3);
            $this->Gender    = func_get_arg(4);
        }
    }

    public function getId() {
        return $this->Id;
    }

    public function getFirstName() {
        return $this->FirstName;
    }

    public function getLastName() {
        return $this->LastName;
    }

    public function getEmail() {
        return $this->Email;
    }

    public function getGender() {
        return $this->Gender;
    }

    public function addCustomer($conn) {
        $sql = "INSERT INTO customer (FirstName, LastName, Email, Gender) VALUES ('$this->FirstName', '$this->LastName', '$this->Email', '$this->Gender')";
        $result = $conn->connectData($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function updateCustomer($conn) {
        $sql = "UPDATE customer SET FirstName = '$this->FirstName', LastName = '$this->LastName', Email = '$this->Email', Gender = '$this->Gender' WHERE Id = $this->Id";
        $result = $conn->connectData($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteCustomer($conn) {
        $sql = "DELETE FROM customer WHERE Id = $this->Id";
        $result = $conn->connectData($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}

?>
