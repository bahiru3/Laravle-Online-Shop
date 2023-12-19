<?php
class Employee {
    private $name;
    private $designation;
    private $salary;

    public function __construct($name, $designation, $salary) {
        $this->name = $name;
        $this->designation = $designation;
        $this->salary = $salary;
    }

    public function getName() {
        return $this->name;
    }

    public function getDesignation() {
        return $this->designation;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setDesignation($designation) {
        $this->designation = $designation;
    }

    public function setSalary($salary) {
        $this->salary = $salary;
    }
}
$employee1 = new Employee("John Doe", "Manager", 5000);
$employee2 = new Employee("Jane Smith", "Developer", 4000);


echo $employee2->getName(); // Output: Jane Smith
echo $employee2->getSalary(); // Output: 4000
echo $employee1->getName(); // Output: John Doe
$employee1->setSalary(5500);
echo $employee1->getSalary(); // Output: 5500



?>