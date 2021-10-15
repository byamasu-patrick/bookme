<?php  
 include('include/db_con.php');
 session_start(); 
      if(isset($_POST["seeker"])){  

        $seeker=$_POST['seeker'];  

                //$query = "SELECT * FROM account WHERE username = :seeker OR organisation = :seeker OR email=:seeker"; 

                $sql="SELECT username,organisation,email FROM account WHERE  FirstName LIKE '%" . $seeker . "%' OR LastName LIKE '%" . $seeker  ."%'";  

                $statement = $pdo->prepare($sql);  
                $statement->execute(  
                     array(  
                          'username'     =>     $seeker,  
                          'organisation' =>     $seeker,
                          'email'        =>     $seeker 
                     )  
                );  


                while($row=mysql_fetch_array($statement)){
                  $Name  =$row['username']; 
                  $organisation=$row['organisation'];  
            } 

                $count = $statement->rowCount();  
                if($count > 0)  
                {  
                   # what to put here i'mm still confused about the code in the way of how to choose and show the contents. 
                }  
           }    


 ?>  