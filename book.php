<?php
$connection = mysqli_connect('localhost','root','');
$db = mysqli_select_db($connection,'test');

if(isset($_POST['submit']))
{
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $email = $_POST['emailid'];
    $phone = $_POST['phone'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $city= $_POST['city'];
    $state = $_POST['state'];
    $zipcode = $_POST['zipcode'];

    $query = "INSERT INTO `book`(`fname`,`mname`,`lname`,`email`,`phone`,`address1`,`address2`,`city`,`state`,`zipcode`) 
    VALUES ('$fname','$mname','$lname','$email','$phone','$address1','$address2','$city','$state','$zipcode')";
    
    $query_run = mysqli_query($connection,$query);
    header('Location: http://localhost/redrosehotel/book.html');
    if(query_run)
    {
        echo '<script type="text/javascript" > alert("Data Saved")</script>';
        
    }
    else{
        echo '<script type="text/javascript" > alert("Data Not Saved")</script>';
    }
}