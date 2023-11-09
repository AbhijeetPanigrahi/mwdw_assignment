<?php
function daysToYearsMonthsDays($days) {
    $years = floor($days / 365);
    $months = floor(($days % 365) / 30);
    $remainingDays = $days - ($years * 365) - ($months * 30);

    echo "Years: " . $years . " Months: " . $months . " Days: " . $remainingDays;
}
$days = 1234;
echo "Given days: $days <br>";
$result = daysToYearsMonthsDays($days);
?>
