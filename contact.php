<?php
$connection = mysqli_connect('localhost','root','');
$db = mysqli_select_db($connection,'test');

if(isset($_POST['insert']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $query = "INSERT INTO `contact`(`name`,`email`,`subject`,`message`) VALUES ('$name','$email','$subject','$message')";
    
    $query_run = mysqli_query($connection,$query);
    header('Location: http://localhost/redrosehotel/contact.html');
    if(query_run)
    {
        echo '<script type="text/javascript" > alert("Data Saved")</script>';
        
    }
    else{
        echo '<script type="text/javascript" > alert("Data Not Saved")</script>';
    }
}
