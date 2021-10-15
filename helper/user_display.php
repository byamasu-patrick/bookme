<?php

include_once("include/db_con.php");
$event_element = array();
if(isset($_SESSION['user_id'])){
    $sql = "SELECT * FROM account";
    $stmt = $pdo -> prepare($sql);
    $stmt -> execute();
    
    $i = 0;

        $people="";
     while($row = $stmt -> fetch(PDO::FETCH_ASSOC)){
        //for($i = 0; i < filterResult.length; i++){
				
				
        $people .= "<tr class='ajaxresult'><td>". $row['username'] ."</td><td>". $row['organisation'] 
                ."</td><td><button class='btn btn-success' onclick=\"clicked_button(". $row['ID'] .")\" id='send_". $i ."' style='margin-left: 5px;' type='button'>".
                "<i class='fa fa-check' style='font-size: 15px;'></i>&nbsp;Book Now</button></td></tr>";

                // .'$("#send_"'. $i.').click(function(){'.
                //         // alert("Hi");
                //   '$("#user_to_book_input_id").val('.$row['ID'].');'.
                //   '$("#user_to_book_image").attr("src", '.$row['profile'].');'.
                //   '$("#user_to_book_name").text('.$row['username'].');'.
                //   '$("#user_to_book_description").text('.$row['description'].');'.
                //  '$("#book_search").hide(); $("#book_back").show(); });';
             // }
        }
        echo $people;
    // while($row = $stmt -> fetch(PDO::FETCH_ASSOC)){
    //     echo '<tr class="before_search">
    //     <td>'. $row['username'] .'</td>
    //     <td>'. $row['organisation'] .'</td>
    //     <td><button class="btn btn-success" id="book_user_'. $i .'" style="margin-left: 5px;"><i class="fa fa-check" style="font-size: 15px;" ></i>&nbsp;Book Now</button></td>
    // </tr>';


    //     // $event_element[$i] = "$('#book_user_". $i ."').click(function(){
    //     //     $('#user_to_book_input_id').val(". $row['ID']  .");
    //     //     $('#user_to_book_image').attr('src', ". $row['profile']  .");
    //     //     $('#user_to_book_name').text(". $row['username']  .");
    //     //     $('#user_to_book_description').text(". $row['description']  .");
    //     //     $('#book_search').hide();
    //     //     $('#book_back').show();});";

    //     //     $i++;
        
    // }
    
}
?>