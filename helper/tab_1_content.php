<?php   
        include_once("include/db_con.php");
                                 $select = "SELECT * FROM bookmedb.appointment WHERE appointment.User_To_Book = ?";
                                      
                                  $stmt = $pdo -> prepare($select);
                                  $stmt -> execute([ $_SESSION['user_id'] ]);
                              //var_dump($_SESSION);
                                  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
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
                                        <form class="text-right" method="POST" action="RequestedConfirm.php">
                                            <input name="User_Id" type="hidden" visible="false" value="'. $row['User_Id'] .'"/>
                                            <input name="Book_Id" type="hidden" visible="false" value="'. $row['Book_Id'] .'"/>
                                            <input name="Reject" type="submit" value="Reject" class="btn btn-danger"/>
                                            <input name="Confirm" type="submit" value="Confirm" class="btn btn-primary"/>
                                            <input name="Done" type="submit" value="Done" class="btn btn-success"/>
                                        </form>
                                    </figcaption></figure>';
                             }
                                   
                          ?>