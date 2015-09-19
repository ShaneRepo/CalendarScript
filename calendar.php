<!DOCTYPE html>
<html>
<head>
    <title>Calender</title>
</head>
<body>
<form action="calendar.php" method="post">

<?php
/**
 * Calendar script
 * Shane Teall
 * 9/19/2015
 */

// Make the Months array
$months = array(1 => 'January',
    'February','March','April',
    'May','June','July','August',
    'September','October',
    'November','December');
// Make the days array
// 29 in Feb to account for leap year
$days = array(1 => '31','29','31','30',
    '31','30','31','31','30','31','30','31');
// Make years array
$years = range(2011,2021);
?>
</form>
</body>
</html>
