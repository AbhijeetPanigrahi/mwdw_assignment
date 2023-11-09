<?php
function calculateSalary($workingHours, $hourlyRate) {
    return $workingHours * $hourlyRate;
}
$employeeID = 101; 
$workingHours = 40; 
$hourlyRate = 15.50; 

$salary = calculateSalary($workingHours, $hourlyRate);
echo "Employee ID: " . $employeeID . "<br>";
echo "Salary: $" . $salary;
?>
