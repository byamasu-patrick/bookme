<?php include('include/db_con.php');
       session_start();
   if (isset($_POST['Confirm']) && isset($_POST['User_Id']) && isset($_POST['Book_Id'])) {
        $insert ="UPDATE book_now SET Status = ?, Updated_Time = ? WHERE Id = ?";
        $stmt= $pdo->prepare($insert);
        $book_id =  (int) trim($_POST['Book_Id']);
        $timestamp = date("Y-m-d H:i:s");

        $stmt->execute([ "Accepted", $timestamp, $book_id]);
        header("refresh:0; index.php");
   }  
    if(isset($_POST['Reject']) && isset($_POST['User_Id']) && isset($_POST['Book_Id'])){

        $insert ="UPDATE book_now SET Status = ?, Updated_Time = ? WHERE Id = ?";
        $stmt= $pdo->prepare($insert);
        $book_id =  (int) trim($_POST['Book_Id']);
        $timestamp = date("Y-m-d H:i:s");

        $stmt->execute([ "Rejected", $timestamp, $book_id]);
              
        header("refresh:0; index.php");
        
   }  
    if(isset($_POST['Done']) && isset($_POST['User_Id']) && isset($_POST['Book_Id'])){

       $insert ="UPDATE book_now SET Status = ?, Updated_Time = ? WHERE Id = ?";
          $stmt= $pdo->prepare($insert);
          $book_id =  (int) trim($_POST['Book_Id']);
          $timestamp = date("Y-m-d H:i:s");

          $stmt->execute([ "Done", $timestamp, $book_id]);
          header("refresh:0; index.php");
   }  
    
     ?>