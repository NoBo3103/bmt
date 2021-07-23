<?php
if (isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $typeofbooking = $_POST['typeofbooking'];
    $pickupaddress = $_POST['pickupaddress'];
    $destinationaddress = $_POST['destinationaddress'];
    $pickupdatetime = $_POST['pickupdatetime'];
    $cartype = $_POST['cartype'];
    $fnumber = $_POST['fnumber'];
    $tnumber = $_POST['tnumber'];
    $con=mysqli_connect("localhost","id3366158_admin","12345678","id3366158_nobotools");

    $ins="INSERT INTO Form1 SET name='$name',email='$email',number='$number',typeofbooking='$typeofbooking',pickupaddress='$pickupaddress',destinationaddress='$destinationaddress',pickupdatetime='$pickupdatetime',cartype='$cartype',fnumber='$fnumber',tnumber='$tnumber'";


    $con->query($ins);

    header("location: https://p-y.tm/4p-LRV7");

}

?>