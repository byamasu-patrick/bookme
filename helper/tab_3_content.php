<?php

include_once("include/db_con.php");
if(isset($_SESSION['user_id'])){
    $done = "SELECT * FROM done WHERE User_Id = ?";
    $stmt = $pdo -> prepare($done);
    $stmt -> execute([$_SESSION['user_id']]);
    $i = 0;
    while($row = $stmt -> fetch(PDO::FETCH_ASSOC)){
        $venue = $row['Venue'];
        $time = $row['TimeProposed'];
        $date = $row['DateProposed'];
        
        
        
        $datetoshow= substr($date,0,2);
        $month = substr($date,3,2);
        //  var_dump($row);
        echo '<figure class="snip1527">
        <div class="image"><img src="assets/img/pr-sample23.jpg" alt="pr-sample23" /></div>
        <figcaption>
          <div class="date"><span class="day">'. $datetoshow .'</span><span class="month">'.$month.'</span></div>
          <h3>'. $row['Agenda'] .'</h3>
          <p> '. $row['Description'] .' </p>
            
            <hr style="margin: 0px; padding: 0px; border-color: #fff"/>
            <span style="font-size: 11px; align: center" >
                Name: '.  $row['Username'] .'
                <p>Location: '.  $venue .' </p>
                <p>Time: '. $time .'</p>
                </span>
            
            <hr style="margin: 0px; padding: 0px; border-color: #fff"/>
            <br/>
           
        </figcaption></figure>';
    }
}


?>