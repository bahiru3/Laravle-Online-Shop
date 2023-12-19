<?php
class Employee {
    protected $name;
    protected $age;
    protected $salary;

    public function __construct($name, $age, $salary) {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    public function displayInfo() {
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
        echo "Salary: $" . $this->salary . "<br>";
    }
}

// Child class inheriting from Employee
class Manager extends Employee {
    private $department;

    public function __construct($name, $age, $salary, $department) {
        parent::__construct($name, $age, $salary);
        $this->department = $department;
    }

    public function displayInfo() {
        parent::displayInfo();
        echo "Department: " . $this->department . "<br>";
    }
}

// Create instances of Employee and Manager
$employee = new Employee("John Doe", 25, 5000);
$manager = new Manager("Jane Smith", 30, 8000, "Sales");

// Call the displayInfo method
$employee->displayInfo();
echo "<br>";
$manager->displayInfo();
?>