<?php
class person {
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

?>