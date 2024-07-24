<?php
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $conn = new mysqli('localhost','root','','test');
  if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);
  }
  else{
    $stmt=$conn->prepare("insert into registration(email,phone)values(?,?)"); 
    $stmt->bind_param("ss",$email,$phone);
    $stmt->execute();
    echo "registration sucessfully...";
    $stmt->close();
    $conn->close();
  }