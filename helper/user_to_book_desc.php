<?php

    if(isset($_GET['user_to_book_id'])){
        $sql = "SELECT * FROM bookmedb.account WHERE account.ID = ?";
        $stmt = $pdo -> prepare($sql);
        $stmt -> execute([(int) $_GET['user_to_book_id']]);
        if($row = $stmt -> fetch(PDO::FETCH_ASSOC)){
            echo '<div><img class="rounded-circle" style="margin-top:-70px;" src="'. $row['profile'] .'" height="150px">
            <h3 style="color: rgb(74,103,116);">'. $row['username'] .'</h3>
            <p style="padding: 20px;padding-bottom: 0;padding-top: 5px;color: rgb(77,112,128);">'. $row['description'] .'</p>
        </div>';
        }
    }

?>