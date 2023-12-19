<?
class Employee {
    protected $name;
    protected $baseSalary;
    
    public function __construct($name, $baseSalary) {
        $this->name = $name;
        $this->baseSalary = $baseSalary;
    }
    
    public function calculateSalary() {
        return $this->baseSalary;
    }
}

class Manager extends Employee {
    private $bonus;
    
    public function __construct($name, $baseSalary, $bonus) {
        parent::__construct($name, $baseSalary);
        $this->bonus = $bonus;
    }
    
    public function calculateSalary() {
        return parent::calculateSalary() + $this->bonus;
    }
}

class Engineer extends Employee {
    private $overtimeHours;
    private $hourlyRate;
    
    public function __construct($name, $baseSalary, $overtimeHours, $hourlyRate) {
        parent::__construct($name, $baseSalary);
        $this->overtimeHours = $overtimeHours;
        $this->hourlyRate = $hourlyRate;
    }
    
    public function calculateSalary() {
        $overtimePay = $this->overtimeHours * $this->hourlyRate;
        return parent::calculateSalary() + $overtimePay;
    }
}

// Example usage
$manager = new Manager("John Doe", 5000, 2000);
echo "Manager Salary: $" . $manager->calculateSalary() . "\n";

$engineer = new Engineer("Jane Smith", 3000, 10, 20);
echo "Engineer Salary: $" . $engineer->calculateSalary() . "\n";

?>