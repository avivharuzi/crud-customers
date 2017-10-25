<?php

require_once("auth/config.php");

$deleteMsg = CustomerHandler::deleteCustomerAction($conn);

$editMsg = CustomerHandler::editCustomerAction($conn);

$addMsg = CustomerHandler::addCustomerAction($conn);

$title = "Home";

?>

<?php require_once("layout/header.php"); ?>
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="jumbotron bg-secondary text-light mt-3">
            <h3>CRUD TABLE</h3>
        </div>
        <?php
        if (!empty($addMsg)) {
            echo $addMsg;
        }
        ?>
        <div class="mb-3">
            <button class="btn btn-info w-100 text-left" id="displayCustomerForm"><i class="fa fa-plus mr-2"></i>Add Customer</button>
        </div>
        <form action="" method="POST" autocomplete="off" id="addCustomerForm">
            <div class="form-group">
                <input type="text" name="firstName" id="firstName" class="form-control" placeholder="First Name" data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$">
            </div>
            <div class="form-group">
                <input type="text" name="lastName" id="lastName" class="form-control" placeholder="Last Name" data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$">
            </div>
            <div class="form-group">
                <input type="email" name="email" id="email" class="form-control" placeholder="Email" data-validation="email">
            </div>
            <div class="form-group">
                <select name="gender" id="gender" class="form-control" data-validation="required">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" value="Submit" name="addCustomer" class="form-control btn btn-dark">
            </div>
        </form>
        <?php
        if (!empty($deleteMsg)) {
            echo $deleteMsg;
        }
        if (!empty($editMsg)) {
            echo $editMsg;
        }
        if ($customers = CustomerHandler::customerTable($conn)) {
            echo $customers;
        } else {
            MessageHandler::warning("There are no customers in the list");
        }
        ?>
    </div>
</div>
<?php require_once("layout/footer.php"); ?>