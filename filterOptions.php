<?php
$bed = filter_input(INPUT_GET, 'inputBed');
$bath = filter_input(INPUT_GET, 'inputBath');
$minPrice = mysqli_real_escape_string($conn, filter_input(INPUT_GET, 'minPrice'));
$maxPrice = mysqli_real_escape_string($conn, filter_input(INPUT_GET, 'maxPrice'));
$minSqFt = mysqli_real_escape_string($conn, filter_input(INPUT_GET, 'minSqFt'));
$maxSqFt = mysqli_real_escape_string($conn, filter_input(INPUT_GET, 'maxSqFt'));
$minPop = mysqli_real_escape_string($conn, filter_input(INPUT_GET, 'minPopulation'));
$maxPop = mysqli_real_escape_string($conn, filter_input(INPUT_GET, 'maxPopulation'));
$minMedAge = mysqli_real_escape_string($conn, filter_input(INPUT_GET, 'minMedianAge'));
$maxMedAge = mysqli_real_escape_string($conn, filter_input(INPUT_GET, 'maxMedianAge'));
$minMedHI = mysqli_real_escape_string($conn,filter_input(INPUT_GET, 'minMedianHouseholdIncome'));
$maxMedHI = mysqli_real_escape_string($conn, filter_input(INPUT_GET, 'maxMedianHouseholdIncome'));
$minUR = mysqli_real_escape_string($conn, filter_input(INPUT_GET, 'minUnemploymentRate'));
$maxUR = mysqli_real_escape_string($conn, filter_input(INPUT_GET, 'maxUnemploymentRate'));
$minCI = mysqli_real_escape_string($conn, filter_input(INPUT_GET, 'minCrimeIndex'));
$maxCI = mysqli_real_escape_string($conn, filter_input(INPUT_GET, 'maxCrimeIndex'));
$minPopGR = mysqli_real_escape_string($conn, filter_input(INPUT_GET, 'minPopulationGrowth'));
$maxPopGR = mysqli_real_escape_string($conn, filter_input(INPUT_GET, 'maxPopulationGrowth'));
$minBD = mysqli_real_escape_string($conn, filter_input(INPUT_GET, 'minBachelorsDegree'));
$minTHU = mysqli_real_escape_string($conn, filter_input(INPUT_GET, 'minTotalHousingUnit'));
$maxTHU = mysqli_real_escape_string($conn, filter_input(INPUT_GET, 'maxTotalHousingUnit'));
$minOOHU = mysqli_real_escape_string($conn, filter_input(INPUT_GET, 'minOwnerOccupiedHUs'));
$maxOOHU = mysqli_real_escape_string($conn, filter_input(INPUT_GET, 'maxOwnerOccupiedHUs'));
$airQuality = mysqli_real_escape_string($conn, filter_input(INPUT_GET, 'airQuality'));
$inputOrder = filter_input(INPUT_GET, 'inputOrder');
$orderType = filter_input(INPUT_GET, 'orderType');

//whichever filter option is set is added to an array that has all the conditions
  $conditions = array();
  if (!empty($bed)) {
      $conditions[] = "numbed >= $bed";
  }
  if (!empty($bath)) {
      $conditions[] = "numbath >= $bath";
  }
  if (!empty($minPrice)) {
    $conditions[] = "price >= $minPrice";
  }
  if (!empty($maxPrice)) {
    $conditions[] = "price <= $maxPrice";
   }
   if (!empty($minSqFt)) {
       $conditions[] = "squarefootage >= $minSqFt";
   }
   if (!empty($maxSqFt)) {
       $conditions[] = "squarefootage <= $maxSqFt";
   }
  if (!empty($minPop)) {
      $conditions[] = "population >= $minPop";
  }
  if (!empty($maxPop)) {
      $conditions[] = "population <= $maxPop";
  }
  if (!empty($minMedAge)) {
      $conditions[] = "MedianAge >= $minMedAge";
  }
  if (!empty($maxMedAge)) {
      $conditions[] = "MedianAge <= $maxMedAge";
  }
  if (!empty($minMedHI)) {
      $conditions[] = "MedianHouseholdIncome >= $minMedHI";
  }
  if (!empty($maxMedHI)) {
      $conditions[] = "MedianHouseholdIncome <= $maxMedHI";
  }
  if (!empty($minUR)) {
      $conditions[] = "UnemploymentRate >= $minUR";
  }
  if (!empty($maxUR)) {
      $conditions[] = "UnemploymentRate <= $maxUR";
  }
  if (!empty($minCI)) {
      $conditions[] = "PropertyCrimeIndex >= $minCI";
  }
  if (!empty($maxCI)) {
      $conditions[] = "PropertyCrimeIndex <= $maxCI";
  }
  if (!empty($minPopGR)) {
      $conditions[] = "PopulationGrowthRate >= $minPopGR";
  }
  if (!empty($maxPopGR)) {
      $conditions[] = "PopulationGrowthRate <= $maxPopGR";
  }
  if (!empty($minBD)) {
      $conditions[] = "BachelorDegree >= $minBD";
  }
  if (!empty($minTHU)) {
      $conditions[] = "TotalHousingUnits >= $minTHU";
  }
  if (!empty($maxTHU)) {
      $conditions[] = "TotalHousingUnits <= $maxTHU";
  }
  if (!empty($minOOHU)) {
      $conditions[] = "OwnerOccupiedHUs >= $minOOHU";
  }
  if (!empty($maxOOHU)) {
      $conditions[] = "OwnerOccupiedHUs <= $maxOOHU";
  }
  if(!empty($airQuality)) {
      $conditions[] = "airquality >= $airQuality";
  }


