<?php
include('include/db_con.php');
session_start();
if(isset($_POST['sub']))
{
        $username=$_POST['name'];
        $organisations=$_POST['organisation'];
        $message=$_POST['email'];
        $descriptions=$_POST['description'];
        $passwords=$_POST['password'];
        //$profiles=$_POST['userProfiles'];
echo "step 1";
    if ($username !="" && $organisations !="" && $message !="" && $descriptions !="" && $passwords !="") {
            # code...

            $folder ="uploads/"; 
            $image = $_FILES['image']['name']; 
            $path = $folder . $image ; 
            $target_file=$folder.basename($_FILES["image"]["name"]);
            $imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);

            $allowed=array('jpeg','png' ,'jpg','gif');

            $filename=$_FILES['image']['name']; 

            $ext=pathinfo($filename, PATHINFO_EXTENSION); 

            echo "step 2";

            if(!in_array($ext,$allowed) ) { 
                echo "Sorry, only JPG, JPEG, PNG & GIF  files are allowed.";
            }  
            else{ 
                move_uploaded_file( $_FILES['image'] ['tmp_name'], $path); 

                //$sth=$con->prepare("insert into users(image)values(:image) "); 
                $s1="INSERT INTO account (profile,username,organisation,email,description,passwords) VALUES(:profile,:username,:organisation,:email,:description,:passwords)";

                $stmt=$pdo->prepare($s1);
                $stmt->execute(['profile'=>$path,'username'=>$username,'organisation'=>$organisations,'email'=>$message,'description'=>$descriptions,'passwords'=>$passwords]);
            header("location:login.php");
            } 

    } 
}
 ?>

