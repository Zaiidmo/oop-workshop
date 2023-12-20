<?php
require_once 'Employee.php';
class Regular_Employee extends Employee
{
    private $salary_per_hour ; 
    private $worked_hours;

    public function __construct($name, $salary, $worked_hours)
    {
        parent::__construct($name, $salary);
        $this->salary_per_hour = $salary / 180;
        $this->worked_hours = $worked_hours;
    }
    public function Salary_calc()
    {
        if ($this->worked_hours > 0) {
            $monthly_salary = $this->salary_per_hour * $this->worked_hours;
            return $monthly_salary;
        }
    }
}
