<?php

$company = new Company();

$ride1 = new Ride('MyFirstRide', 1015, 1045, 30, 50, 'Monday');
$ride2 = new Ride('MySecondRide', 2000, 2045, 45, 75, 'Friday');
$ride3 = new Ride('MyThirdRide', 2300, 2400, 60, 100, 'Saturday');

$company->addRide($ride1);
$company->addRide($ride2);
$company->addRide($ride3);

$company->rideData();

echo "<br><br>";

echo "Total income: " . $company->income() . "<br>";

echo "Total distance: " . $company->totalDist() . "<br>";

echo "Average distance: " . $company->averageDist() . "<br>";

echo "Longest Ride: " . $company->longestRide() . "<br>";