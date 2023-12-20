<?php 
require "./database/config.php";

include "./Controller/classes/RegEmp.php";
$tergui = new Regular_Employee("Tergui", 2500, 100);
echo $tergui->Salary_calc();
