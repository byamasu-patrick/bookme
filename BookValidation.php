<?php
 session_start();
include('include/db_con.php');

//var_dump($_POST);
        $Agenda=$_POST['topic'];
        $Description=$_POST['description'];
        $Venue=$_POST['venue'];
        $DateProposed=$_POST['date'];
        $TimeProposed=$_POST['time'];
        $user_to_book= $_POST['user_to_book'];

if(isset($Agenda) && isset($Description) && isset($Venue) && isset($DateProposed) && isset($TimeProposed) && isset($user_to_book))
{   
    if ($user_to_book != "" && $Agenda !="" && $Description !="" && $Venue !="" && $DateProposed !="" && $TimeProposed !="") {
        # code...
        $current_time = date('Y-m-d H:i:s');
        //$updated_time = $cu
         $s1="INSERT INTO bookmedb.book_now (User_Id, User_To_Book, Agenda, Description, Venue, 
         DateProposed, TimeProposed, Timestamp, Updated_Time) VALUES(:User_Id, :User_To_Book, 
         :Agenda, :Description, :Venue,:DateProposed,:TimeProposed, :Timestamp, :Updated_Time)";

                $stmt=$pdo -> prepare($s1);
                $stmt -> execute(array(
                    ':User_Id' => $_SESSION['user_id'], 
                    ':User_To_Book' => $user_to_book, 
                    ':Agenda' => $Agenda,
                    ':Description' => $Description,
                    ':Venue' => $Venue,
                    ':DateProposed' => $DateProposed,
                    ':TimeProposed' => $TimeProposed,
                    ':Timestamp' => $current_time,
                    ':Updated_Time' => $current_time
                ));
                header("location:index.php");
                
            } 
            else {
                echo" BOOKING NOT ACCOMPLISHED";
                header("location:book_now.php");
                
            }
        }
 ?>

