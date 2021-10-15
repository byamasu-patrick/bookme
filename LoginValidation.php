<?php  
 include('include/db_con.php');
 session_start(); 
      if(isset($_POST["logMeIn"]))  
      {  
           if(empty($_POST["Email"]) || empty($_POST["password"]))  
           {  
                $message = '<label>All fields are required</label>';  
           }  
           else  
           {  
                $query = "SELECT * FROM account WHERE email = :email AND passwords = :password";  
                $statement = $pdo->prepare($query);  
                $statement->execute(  
                     array(  
                          'email'     =>     $_POST["Email"],  
                          'password'     =>     $_POST["password"]  
                     )  
                );  
                
                if($row = $statement -> fetch(PDO::FETCH_ASSOC))  
                {  
                     $_SESSION["user_id"] = $row["ID"];
                     $_SESSION["profile"] = $row["profile"];
                     $_SESSION["username"] = $row["username"];
                     $_SESSION["email"] = $row["email"];  
                     header("location:index.php");  
                }  
                else  
                {  
                     $message = '<label>Wrong Data</label>';  
                }  
           }  
      }  


 ?>  