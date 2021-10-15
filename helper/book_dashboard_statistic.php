<?php

    
    include_once("include/db_con.php");
    if(isset($_SESSION['user_id'])){
       
        
            $confirmed = "SELECT * FROM bookmedb.confirmed WHERE confirmed.User_Id = ? OR confirmed.User_To_Book = ?";
        $stmt = $pdo -> prepare($confirmed);
        $stmt -> execute([ $_SESSION['user_id'], $_SESSION['user_id'] ]);
        $j = 0;
        while($row = $stmt -> fetch(PDO::FETCH_ASSOC)){
            $j++;
        }
        $rejected = "SELECT * FROM bookmedb.rejected WHERE rejected.User_Id = ? OR rejected.User_To_Book = ?";
        $stmt = $pdo -> prepare($rejected);
        $stmt -> execute([ $_SESSION['user_id'], $_SESSION['user_id'] ]);
        $k = 0;
        while($row = $stmt -> fetch(PDO::FETCH_ASSOC)){
            $k++;
        }
        echo '<ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" role="tab" data-toggle="tab" href="#tab-1">Confirmed&nbsp;<span class="badge badge-primary">'. $j .'</span></a></li>      
        <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-2">Rejected&nbsp;<span class="badge badge-danger">'. $k .'</span></a></li>
       </ul>';
    }

?>