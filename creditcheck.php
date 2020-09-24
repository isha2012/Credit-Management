<?php 
       session_start();
       require 'connect.php'; //connecting databse 

       $First_Name1 = $_SESSION["First_Name"]; //Name of the person who will transfer the Credit
       $query02 ="Select * FROM `Users` WHERE First_Name='$First_Name1'";
       $result01=$mysqli->query($query02);
       $row01 = mysqli_fetch_array($result01);
       $var = $row01['Credit']."<br>"; //This will show the credit of the person who is transfering
       $from = $row01['First_Name']; // Name of the person!     
       //  echo $var;
       //  echo $from;     
       $to1 = $_SESSION['to'];  //name of the person to whom the credit is to be transfered.
       // echo $to1;
       $query03="SELECT Credit FROM `Users` WHERE First_Name='$to1'";
       $result02=$mysqli->query($query03);
       $row02 = mysqli_fetch_array($result02);
       $var2 = $row02['Credit']; //Total Credit of the person whom credit is going to transfer.
      // echo $var2;

      // echo $_POST['transfer'];  Amount that is going to Be credit.

       if ($_POST['transfer']<=0)
       {
           $message="Please Enter the Sufficient Amount!!";
           echo "<script type='text/javascript'>alert('$message');
           </script>";
           include 'index.php';
       }
       else if($_POST['transfer']>$var)
       {
           $message="Your Account Credit is Low!!";
           echo "<script type='text/javascript'>alert('$message');
           </script>";
           include 'index.php';
       }
       else if($_POST['transfer'] < $var)
       {
           $change = (INT)$var - $_POST['transfer'];
           $result= mysqli_query($mysqli, "UPDATE `Users` SET Credit='$change' WHERE First_Name='$from'");    
           $change2= (INT)$var2 + $_POST['transfer'];
           $result=mysqli_query($mysqli, "UPDATE `Users` SET Credit='$change2' WHERE First_Name='$to1'"); 
           $message="Amount Successfully Credited!!";
           echo "<script type='text/javascript'>alert('$message');
           </script>";
           include 'index.php';
       }

     
?>   



