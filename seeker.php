<?php

// php search data in mysql database using PDO
// set data in input text
include('include/db_con.php');
session_start();

$seeker = isset($_POST['seeker']) ? $_POST['seeker'] : null ;


$userId = isset($_POST['user_id']) ? $_POST['user_id'] : null ;

if(!empty($seeker))
{
    // id to search
  
     // mysql search query
    $pdoQuery = "SELECT * FROM account WHERE username LIKE  :username OR organisation LIKE  :organisation OR email LIKE  :email ";
    //$pdoQuery = "SELECT * FROM account WHERE username LIKE :username";//OR organisation LIKE ? OR email LIKE ?";
    
    //$pdoQuery ="SELECT username,organisation,email FROM account WHERE  FirstName LIKE '%" . $seeker . "%' OR LastName LIKE '%" . $seeker  ."%'"; 
    
    
    $pdoResult = $pdo->prepare($pdoQuery);
   
    //set your id to the query id
    $pdoExec = $pdoResult->execute(array('username'=> "%$seeker%", 'organisation'=>"%$seeker%", 'email'=> "%$seeker%"));
    //$pdoExec = $pdoResult->execute(array('username'=> "%$seeker%"));//, $seeker, $seeker));
     
    if($pdoExec)
    {
            // if id exist 
            // show data in inputs
        //echo $pdoExec;
        $sendjson = array();
        if($pdoResult->rowCount()>0)
        {
            $i = 0;
            foreach($pdoResult as $row)
            {
                $username = $row['username'];
                $organisation = $row['organisation'];
                $sendjson[$i] = $row;

                $i++;
            }
            $seeker = null;
            echo json_encode($sendjson);
                
        }else{
			echo json_encode(["Result" =>"No"]);
		}
          
    }else{
		echo json_encode(["Result" =>"No"]);
	}
}
else if(!empty($userId)){
    
    $pdoQuery = "SELECT * FROM account WHERE ID = ?";

    $pdoResult = $pdo->prepare($pdoQuery);
   
    $pdoExec = $pdoResult->execute([ $userId ]);
     
    if($pdoExec)
    {
       
        if($row = $pdoResult -> fetch(PDO::FETCH_ASSOC))
        {
            $userId = null;
            echo json_encode($row);
                
        }else{
            $userId = null;
			echo json_encode(["Result" =>"No"]);
		}
          
    }else{
        
        $userId = null;
		echo json_encode(["Result" =>"No"]);
    }
    
    $userId = null;
}
else {
    echo json_encode(["Result" =>"empty"]);
}


?>

