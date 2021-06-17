<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'ars');

if (isset($_POST['signup'])) {
    $username = $_POST['ars_username'];
    $emailid = $_POST['ars_email'];
    $password = $_POST['ars_password'];
    $confirm_password = $_POST['ars_cpassword'];
    $errormsg = "A User already exist with the same Email id. Please try with another Email id";
    $passworderror = "The two passwords do not match";
    if ($password != $confirm_password) {
        echo '<script type="text/javascript">alert("' . $passworderror . '")</script>';
    } else {
        $password = md5($password);
        $sql1 = "select * from ars_userdetails where ars_emailid=('$emailid')";
        $query1 = mysqli_query($db, $sql1);
        if (mysqli_num_rows($query1) > 0) {
            echo '<script type="text/javascript">alert("' . $errormsg . '")</script>';
        } else {
            $sql2 = "insert into ars_userdetails (ars_username, ars_emailid, ars_password) values ('$username', '$emailid', '$password')";
            $query2 = mysqli_query($db, $sql2);
            header('location: index.php');
        }
    }
}

if (isset($_POST['login'])) {
    $emailid = $_POST['ars_email'];
    $password = $_POST['ars_password'];
    $password = md5($password);
    $msg = "Incorrect Data";
    $sql1 = "select ars_username from ars_userdetails where ars_emailid=('$emailid') AND ars_password=('$password')";
    $query1 = mysqli_query($db, $sql1);
    while ($row = $query1->fetch_assoc()) {
        $username=$row["ars_username"];
    }
    if (mysqli_num_rows($query1) == 0) {
        echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    } else {
        
        header('location: ../index.html');
    }
}