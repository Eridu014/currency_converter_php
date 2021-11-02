<?php
  
$annualExpenses = [
    "vacations" => 1000,
    "carRepairs" => 1000,    
];

$monthlyExpenses = [
    "rent" => 1500,
    "utilities" => 200,
    "healthInsurance" => 200
];

$weeklyExpenses = [
  "gas" => 25,
  "food" => 90,
  "entertainment" => 47
];

$grossSalary = 48150;
echo("Gross Salary: " . $grossSalary);
$socialSecurity = $grossSalary * .062;

$incomeSegments = [[9700, .88], [29775, .78], [8675, .76]];

// Write your code below:
$netIncome = ($incomeSegments[0][0] * $incomeSegments[0][1]) + ($incomeSegments[1][0] * $incomeSegments[1][1]) + ($incomeSegments[2][0] * $incomeSegments[2][1]);
$annualIncome = $netIncome - $socialSecurity;
echo("\n" . "Annual income after social security tax deduction: " . round($annualIncome, 2));

$annualIncome -= ($annualExpenses["vacations"] + $annualExpenses["carRepairs"]);
echo("\n" . "Annual income after annual expenses: " . round($annualIncome, 2));

$monthlyIncome = $annualIncome / 12;
echo("\n" . "Monthly Income before monthly expenses: " . round($monthlyIncome, 2));

//deduct monthly expenses from monthly income
$monthlyIncome -= $monthlyExpenses["rent"] + $monthlyExpenses["utilities"] + $monthlyExpenses["healthInsurance"];
echo("\n" . "Monthly income after monthly expenses: " . round($monthlyIncome, 2));

//weekly income
$weeklyIncome = $monthlyIncome / 4.33;
echo("\n" . "Weekly income before weekly expenses: " . round($weeklyIncome, 2));

$weeklyIncome -= $weeklyExpenses["gas"] + $weeklyExpenses["food"] + $weeklyExpenses["entertainment"];
echo("\n" . "Weekly income after weekly expenses: " . round($weeklyIncome, 2));

$possibleAnnualSavings = $weeklyIncome * 52;
echo("\n" . "Possible annual savings: " . round($possibleAnnualSavings, 2));
?>
