<?php

$units = $_POST['units'];
$residency = $_POST['residency'];
$parking = $_POST['parking'];
$csc = $_POST['csc'];



$tuition = $units * $residency;
$health = 20;
$subtotal = $tuition + $health + $csc + $parking;
/* scholarship will never be more than the tuition so there should never be 
a negative total restration fees */
$scholarship = (rand(1,$tuition));
$total = $subtotal - $scholarship;

echo "<p>Cost of tuition: $units units x $$residency = $$tuition.</p>";
echo "<p>Student Health Fee: $$health.</p>";
echo "<p>College Services Card: $$csc.</p>";
echo "<p>Parking: $$parking.</p>";
echo "<p>Registration subtotal: $$subtotal</p>";
echo "<p>Scholarship award: $$scholarship</p>";
echo "<p><strong>Total Registration Fees: $$total</strong></p>";

?>