<?php

require __DIR__."/vendor/autoload.php";

use src\dao\ContractModel;
use src\dao\LeadModel;
use src\dao\UserModel;

$contractModel = new ContractModel();
print_r($contractModel);
echo "<hr>";

$leadtModel = new LeadModel();
print_r($leadtModel);
echo "<hr>";

$userModel = new UserModel();
print_r($userModel);
echo "<hr>";