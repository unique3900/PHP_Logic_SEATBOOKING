<?php
$servername="localhost";
$username="root";
$password="root";
$dbname="seatbooking";

$con=mysqli_connect($servername,$username,$password,$dbname);
if(!$con){
    echo "<script>alert('cannot make a connectiion!!Wait and Try again!!'</script>";
}

print_r(serialize( $_POST['seats']));

$seat=serialize($_POST['seats']);

// Seat book garera haleko db ma
$query="INSERT INTO `bookings` ( `movie`, `seats`) VALUES ('sese','".$seat."')";
$result = mysqli_query($con, $query);
if (!$result) {
    echo "<script>alert('Something Went Wrong ')</script>";
}

$fetch="Select * from bookings";
$result1 = mysqli_query($con, $fetch);

while($row_search=mysqli_fetch_assoc($result1)){

    //Booked seats ko Data
    echo unserialize($row_search['seats']) ;
}
?>