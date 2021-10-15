<?php

    
    include_once("include/db_con.php");
    if(isset($_SESSION['user_id'])){
       
        $requested = "SELECT * FROM bookmedb.appointment WHERE appointment.User_To_Book = ?";
        $stmt = $pdo -> prepare($requested);
        $stmt -> execute([$_SESSION['user_id']]);
        $i = 0;
        while($row = $stmt -> fetch(PDO::FETCH_ASSOC)){
            $i++;

        }
        $applied = "SELECT * FROM bookmedb.appointment WHERE appointment.User_Id = ?";
        $stmt = $pdo -> prepare($applied);
        $stmt -> execute([$_SESSION['user_id']]);
        $a = 0;
        while($row = $stmt -> fetch(PDO::FETCH_ASSOC)){
            $a++;

        }
        $done = "SELECT * FROM done WHERE User_Id = ?";
        $stmt = $pdo -> prepare($done);
        $stmt -> execute([$_SESSION['user_id']]);
        $l = 0;
        while($row = $stmt -> fetch(PDO::FETCH_ASSOC)){
            $l++;
        }


        echo '<ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-3">Completed&nbsp;<span class="badge badge-success">'. $l .'</span></a></li>
        <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-2">Applied&nbsp;<span class="badge badge-danger">'. $a .'</span></a></li>
        <li class="nav-item"><a class="nav-link active" role="tab" data-toggle="tab" href="#tab-1">Requested&nbsp;<span class="badge badge-primary">'. $i .'</span></a></li>
        </ul>';
    }

?>