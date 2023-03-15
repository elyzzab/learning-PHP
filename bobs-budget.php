<?php

/*
  "Bob's Budget" Project (index.php file only)
  Chapter: Learn PHP Arrays
  ---
  Task: "Practice everything you've learned so far about writing PHP programs... Bob just got a new job and needs help
  figuring out his budget! He has a salary, annual expenses, monthly expenses, and weekly expenses. He wants to know
  how much of his salary he can plan to save over the course of a year."
*/


$annualExpenses = [
    "vacations" => 1000,
    "carRepairs" => 1000,    
];

$monthlyExpenses = [
    "rent" => 1500,
    "utilities" => 200,
    "healthInsurance" => 200
];

$grossSalary = 48150;
$socialSecurity = $grossSalary * .062;

$incomeSegments = [[9700, .88], [29775, .78], [8675, .76]];
/*
"He pays 12% (keeps 88%) on the first 9,700, 22% (keeps 78%) on the next 29,775, and pays 24% (keeps 76%)
on the remainder of his salary. This data is stored in $incomeSegments."
*/

// Write your code below:
$netIncome = ($incomeSegments[0][0]*$incomeSegments[0][1]) + ($incomeSegments[1][0]*$incomeSegments[1][1]) + ($incomeSegments[2][0]*$incomeSegments[2][1]);

$annualIncome = $netIncome - $socialSecurity;
echo $annualIncome . "\n";

// Less annual expenses
$annualIncome = $annualIncome - $annualExpenses["vacations"] - $annualExpenses["carRepairs"];
echo $annualIncome . "\n";

// Monthly expenses
$monthlyIncome = $annualIncome / 12;
echo $monthlyIncome . "\n";

$monthlyIncome = $monthlyIncome - $monthlyExpenses["rent"]
- $monthlyExpenses["utilities"] - $monthlyExpenses["healthInsurance"];
echo $monthlyIncome . "\n";

// Weekly expenses
$weeklyIncome = $monthlyIncome / 4.33;
echo $weeklyIncome . "\n";

$weeklyExpenses = [
  "gas" => 25,
  "food" => 90,
  "entertainment" => 47
];

$weeklyIncome = $weeklyIncome - $weeklyExpenses["gas"] - $weeklyExpenses["food"] - $weeklyExpenses["entertainment"];
echo $weeklyIncome . "\n";

// Savings
$savings = $weeklyIncome * 52;
echo $savings;
