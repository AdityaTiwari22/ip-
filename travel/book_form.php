<?php

   $conn = mysqli_connect('localhost:3306','root','','book_db');

   if(isset($_POST['send'])){
      $Name = $_POST['Name'];
      $Email = $_POST['Email'];
      $Phone = $_POST['Phone'];
      $Address = $_POST['Address'];
      $whereto = $_POST['whereto'];
      $howmany = $_POST['howmany'];
      $Arrival = $_POST['Arrival'];
      $depart = $_POST['depart'];

      $request = " insert into book_form(name, email, phone, address, location, guests, arrivals, leaving) values('$Name','$Email','$Phone','$Address','$whereto','$howmany','$Arrival','$depart') ";
      mysqli_query($connection, $request);
      session_start();
      $_SESSION['success_message'] = "room booked successfully.";
      header('location:book.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>