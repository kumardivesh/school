<?php

   $connection = mysqli_connect('localhost','root','','school');
   if($connection) {
    echo "connected";
   }

   if(isset($_POST)){
      $name = $_POST['name'];
     
      $email = $_POST['email'];
      $mobile = $_POST['mobile'];
      $message = $_POST['message'];
     

      $request = " insert into school(`name`, `email`, `mobile`,`message`) values('$name','$email','$mobile','$message')";
      $result=mysqli_query($connection, $request);
      if(!$result){
        echo mysqli_connect_error();
      }

         header('location:contact.php'); 

   }else{
      echo 'something went wrong please try again!';
   }
   ?>