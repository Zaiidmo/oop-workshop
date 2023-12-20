<?php 
require 'Employee.php';
class Senior extends Employee {
    private $yearly_salary;
    
    public function __constructor($name, $yearly_salary){
        $this->name = $name;
        $this->yearly_salary = $yearly_salary;
    }

    public function salary_calc()
    {
        if ($this->yearly_salary > 0) {
            $salary = $this->yearly_salary / 12;
            return $salary;
        }
    }
}