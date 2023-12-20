<?php
require 'Employee.php';
class Manager extends Employee {
    private $bonus;

    public function __construct($name, $salary, $bonus) {
        parent::__construct($name, $salary);
        $this->bonus = $bonus;
    }
  
    public function salary_calc() {
        if ($this->bonus > 0) {
            $monthly_salary = ($this->bonus / 12) + $this->salary;
            return $monthly_salary;
        }
    }
}