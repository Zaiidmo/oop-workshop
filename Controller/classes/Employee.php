<?php 
abstract class Employee {
    protected $id;
    protected $name;
    protected $salary; 
    
    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }
    abstract public function salary_calc();
}