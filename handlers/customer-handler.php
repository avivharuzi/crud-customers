<?php

class CustomerHandler {
    private function __construct() {
    }

    public static function getCustomer($conn, $id) {
        $sql = "SELECT * FROM customer WHERE Id = $id LIMIT 1";
        $customer = $conn->getSingleData($sql, "Customer");

        if ($customer) {
            return $customer;
        } else {
            return false;
        }
    }
    
    public static function customerTable($conn) {
        $sql = "SELECT * FROM customer ORDER BY Id DESC";
        $customers = $conn->getFullData($sql, "Customer");

        if ($customers) {
            $table =
            "<form action='' method='POST' autocomplete='off'>
                <table class='table table-hover table-responsive'>
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>";
            foreach ($customers as $customer) {
                $table .=
                "<tr>
                    <td>{$customer->getFirstName()}</td>
                    <td>{$customer->getLastName()}</td>
                    <td>{$customer->getEmail()}</td>
                    <td>{$customer->getGender()}</td>
                    <td class='edit-pencil'><div class='btn btn-success w-100'><i class='fa fa-pencil'></i></td>
                    <td><button type='submit' name='deleteCustomer' class='btn btn-danger w-100' value='{$customer->getId()}'><i class='fa fa-trash'></i></td>
                </tr>
                <tr class='edit-row'>
                    <td><input type='text' name='firstName{$customer->getId()}' id='firstName{$customer->getId()}' class='form-control' value='{$customer->getFirstName()}'></td>
                    <td><input type='text' name='lastName{$customer->getId()}' id='lastName{$customer->getId()}' class='form-control' value='{$customer->getLastName()}'></td>
                    <td><input type='text' name='email{$customer->getId()}' id='email{$customer->getId()}' class='form-control' value='{$customer->getEmail()}'></td>
                    <td>
                        <select name='gender{$customer->getId()}' id='gender{$customer->getId()}' class='form-control'>
                            <option value='male'>Male</option>
                            <option value='female'>Female</option>
                        </select>
                    </td>
                    <td colspan='2'><button type='submit' name='saveCustomer' class='btn btn-primary w-100' value='{$customer->getId()}'><i class='fa fa-save'></i></td>
                </tr>";
            }
            $table .= 
                    "</tbody>
                </table>
            </form>";
            return $table;
        } else {
            return false;
        }
    }

    public static function deleteCustomerAction($conn) {
        if (isset($_POST["deleteCustomer"])) {
            $customerId = validationHandler::testInput($_POST["deleteCustomer"]);
            $customer = CustomerHandler::getCustomer($conn, $customerId);
            
            if ($customer->deleteCustomer($conn)) {
                return MessageHandler::success("Customer deleted successfully");
            } else {
                return MessageHandler::error("There was problem with deleting this customer");
            }
        }
    }

    public static function editCustomerAction($conn) {
        if (isset($_POST["saveCustomer"])) {
            $customerId = $_POST["saveCustomer"];

            if (ValidationHandler::validateInputs($_POST["firstName$customerId"], "/^[a-zA-Z]*$/")) {
                $firstName = ValidationHandler::testInput($_POST["firstName$customerId"]);
            } else {
                $errors[] = "Invalid first name";
            }

            if (ValidationHandler::validateInputs($_POST["lastName$customerId"], "/^[a-zA-Z]*$/")) {
                $lastName = ValidationHandler::testInput($_POST["lastName$customerId"]);
            } else {
                $errors[] = "Invalid Last Name";
            }

            if (ValidationHandler::validateEmail($_POST["email$customerId"])) {
                $email = ValidationHandler::testInput($_POST["email$customerId"]);
            } else {
                $errors[] = "Invalid email";
            }

            if (ValidationHandler::validateInputs($_POST["gender$customerId"], "/^[a-zA-Z]*$/")) {
                $gender = ValidationHandler::testInput($_POST["gender$customerId"]);
            } else {
                $errors[] = "Invalid gender";
            }

            if (!isset($errors)) {
                $customer = new Customer($customerId, $firstName, $lastName, $email, $gender);
                if ($customer->updateCustomer($conn)) {
                    return MessageHandler::success("Customer updated successfully");
                }
            } else {
                return MessageHandler::error($errors);
            }
        }
    }

    public static function addCustomerAction($conn) {
        if (isset($_POST["addCustomer"])) {

            if (ValidationHandler::validateInputs($_POST["firstName"], "/^[a-zA-Z]*$/")) {
                $firstName = ValidationHandler::testInput($_POST["firstName"]);
            } else {
                $errors[] = "Invalid first name";
            }

            if (ValidationHandler::validateInputs($_POST["lastName"], "/^[a-zA-Z]*$/")) {
                $lastName = ValidationHandler::testInput($_POST["lastName"]);
            } else {
                $errors[] = "Invalid Last Name";
            }

            if (ValidationHandler::validateEmail($_POST["email"])) {
                $email = ValidationHandler::testInput($_POST["email"]);
            } else {
                $errors[] = "Invalid email";
            }

            if (ValidationHandler::validateInputs($_POST["gender"], "/^[a-zA-Z]*$/")) {
                $gender = ValidationHandler::testInput($_POST["gender"]);
            } else {
                $errors[] = "Invalid gender";
            }

            if (!isset($errors)) {
                $customer = new Customer(null, $firstName, $lastName, $email, $gender);
                if ($customer->addCustomer($conn)) {
                    return MessageHandler::success("Customer added successfully");
                }
            } else {
                return MessageHandler::error($errors);
            }
        }
    }
}

?>
