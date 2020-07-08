<?php include "admin_functions.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="calendar.css">
    <title>Document</title>
</head>
<body>
    
<div class="gig-container">

<?php 

$connection = mysqli_connect('localhost', 'root', "myObj:php$$$12", "admin_panel");
if(!$connection) {
    die("error");
} 

$query = "SELECT * FROM gig_calendar"; 
$select_gig_details = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($select_gig_details)) {
$gig_id =  $row['id'];
$gig_month =  $row['month'];
$gig_day =  $row['day'];
$gig_day_of_week =  $row['day_of_week'];
$gig_band =  $row['band'];
$gig_city =  $row['city'];
$gig_state =  $row['state'];
$gig_country =  $row['country'];
$gig_venue =  $row['venue'];
$gig_time =  $row['time'];

echo "<div class='gig-item'>";
echo "<div class='date-band-location col-50'>";
echo "<p class='gig-date'>{$gig_month} {$gig_day} {$gig_day_of_week}</p>";
echo "<p class='gig-band'>{$gig_band}</p>";
echo "<p class='gig-local'>{$gig_city}, {$gig_state}, {$gig_country}</p>";
echo "</div>";
echo "<div class='venue-time col-50'>";
echo "<p class='gig-venue'>{$gig_venue}</p>";
echo "<p class='gig-venue'> @ {$gig_time}</p>";
echo "</div>";
echo "</div>";
echo "<div class='seperator'></div>";
}
?>
</div>
</body>
</html>



