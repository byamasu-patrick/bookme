<?php include_once("helper/header.php");?>  
  <header>
    <h1>Book Me!</h1>
  </header>
        <?php include_once("helper/navigation.php"); ?>

          <div class="col-9">

          <div  id="book_search">
            <div class="form-group pull-right col-lg-4"><input type="text" name="seeker" class="search form-control" placeholder="Search by typing here.."></div><span class="counter pull-right"></span>
            <div class="table-responsive table-bordered table table-hover table-bordered results">
                <table class="table table-striped table-bordered table-hover">
                    <thead class="bill-header cs">
                        <tr>
                            <th id="trs-hd" class="col-lg-1" style="background-color: #4d7080;">Full name&nbsp;</th>
                            <th style="background-color: #4d7080;">Organisation</th>
                            <th id="trs-hd" class="col-lg-1" style="background-color: #4d7080;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="warning no-result">
                            <td colspan="12"><i class="fa fa-warning"></i>&nbsp; No Result !!!</td>
                            <td>Cell 2</td>
                        </tr>
                        <?php include_once("helper/user_display.php"); ?>
                    </tbody>
                </table>
            </div>
        </div>
   <div  id="book_back" style="display: none">
   <div class="text-center profile-card" style="margin:15px;background-color:#ffffff;">
				<div class="profile-card-img" style="background-image: url(&quot;iceland.jpg&quot;);height: 150px;background-size: cover;"></div>
        <div>
            <img class="rounded-circle" style="margin-top:-70px;" id="user_to_book_image" src="" height="150px">
            <h3 style="color: rgb(74,103,116);" id="user_to_book_name"></h3>
            <p style="padding: 20px;padding-bottom: 0;padding-top: 5px;color: rgb(77,112,128);" id="user_to_book_description"></p>
        </div>
				<div class="row" style="padding: 0;padding-bottom: 10px;padding-top: 20px;color: rgb(74,103,116);">
					<div class="col-md-6">
						<p class="text-nowrap text-right" style="color: rgb(74,103,116);">Requests Sent</p>
						<p class="text-right" style="color: rgb(77,112,128);"><strong>12M</strong> </p>
					</div>
					<div class="col-md-6">
						<p class="text-left" style="color: rgb(74,103,116);">Request Received</p>
						<p class="text-left" style="color: rgb(77,112,128);"><strong>1M</strong> </p>
					</div>
				</div>
			</div>
			<div class="row" style="margin-right: 0px;margin-left: 0px;">
				<div class="col">
					<form class="register-form" method="POST" action="BookValidation.php">
						<fieldset>
							<div class="form-row">
							<div class="col-12 col-sm-6 col-md-12">
									<div id="lp-mail-wrapper">
										<input class="form-control" type="hidden" id="user_to_book_input_id" value="" placeholder="" name="user_to_book"></div>
								</div>
								<div class="col-md-12">
									<input class="form-control d-none" type="text" id="lp-formID" value="vr-campus-tours">
									<input class="form-control d-none" type="text" id="lp-pathID" value="<?php echo $_GET['path'];?>">
								</div>
								<div class="col-12 col-sm-6 col-md-12">
									<div id="lp-mail-wrapper">
										<input class="form-control" type="text" id="lp-mail" placeholder="Agenda" name="topic"></div>
								</div>
								<div class="col-12 col-sm-6 col-md-12">
									<div id="lp-mail-wrapper">
										<input class="form-control" type="text" id="lp-mail" placeholder="Description" name="description"></div>
								</div>
								<div class="col-12 col-sm-6 col-md-12">
									<div id="lp-mail-wrapper">
										<input class="form-control" type="text" id="lp-mail" placeholder="venue" name="venue"></div>
								</div>
								<div class="col-12 col-sm-6 col-md-12">
									<div id="lp-mail-wrapper">
										<input class="form-control" type="text" id="lp-mail" placeholder="dateProposed" name="date"></div>
								</div>
								<div class="col-12 col-sm-6 col-md-12" style="margin-bottom: 20px;">
									<div id="lp-mail-wrapper"><input class="form-control" type="text" id="lp-mail" placeholder="timeProposed" name="time"></div>
									<button class="btn btn-primary" name="book_now" type="submit" style="width: 100%;background-color: rgb(37,67,81);"><i class="fa fa-handshake-o"></i>&nbsp;Book now</button>
								</div>
								<div
									class="col-12 col-sm-6 col-md-12">
									<div id="lp-mail-wrapper"></div>
							</div>
							<div class="col-12 col-sm-6 col-md-12">
								<div id="lp-title-wrapper"></div>
              </div>
              </fieldset>
				</form>
				</div>
				
			</div>
 
        </div>
</div>

    </div>
    <div class="footer-dark" style="background-color: rgb(74,103,116);">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h3>Beme</h3>
                        <p>planning is very important for successful life. Once you plan you reduce unnecessary disturbance and un expected results of people that you book. One will remember the time and day that you should meet. Everytime you book someone
                            you have set 60% assurance of meeting that person, Once the person commfirm the appointment you have 90% in advance of meeting the person.</p>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About us</h3>
                        <ul>
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Hosting</a></li>
                        </ul>
                    </div>
                </div>
                <p class="copyright">Beme © 2019</p>
            </div>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/login-full-page-bs4.js"></script>
    <script src="assets/js/login-full-page-bs4-1.js"></script>
    <script src="assets/js/Animated-Type-Heading.js"></script>
    <script src="assets/js/imagepreview.js"></script>
   <!--  <script src="assets/js/Table-With-Search.js"></script> -->
    <script src="assets/js/testimonialSlider.js"></script>
    <!-- <script src="assets/js/search_loader.js"></script> -->
    <script type="text/javascript">
        
        

$(document).ready(function() {
 
  $(".search").keyup(function () {
	$('.ajaxresult').remove();
  $('.before_search').hide();
    var searchTerm = $(".search").val();
    if(searchTerm == ""){
      $('.before_search').show();
    }
    jQuery.ajax({
      url: "seeker.php",
      data: {
        "seeker": searchTerm
      },
        type: "POST",
        success: function(result){
            //console.log("Result is : " + result);
		
				var filterResult = JSON.parse(result);
        console.log(filterResult);
				for(var i = 0; i < filterResult.length; i++){
				
				
          var people = $("<tr class='ajaxresult'><td>"+ filterResult[''+ i]['2'] +"</td><td>"+ 
                  filterResult[''+ i]['3'] +"</td><td><button class='btn btn-success send_"+ i +"' id='send_"+ i +"' style='margin-left: 5px;' type='button'><i class='fa fa-check' style='font-size: 15px;'></i>&nbsp;Book Now</button></td></tr>");

              $('.results tbody').append(people);
            var new_dat = filterResult[''+ i];

            $('#send_'+ i).click(function(){
                          // alert("Hi");
                    $("#user_to_book_input_id").val(new_dat.ID);
                    $("#user_to_book_image").attr("src", new_dat.profile);
                    $("#user_to_book_name").text(new_dat.username);
                    $("#user_to_book_description").text(new_dat.description);
                    $("#book_search").hide();
                    $("#book_back").show();
            });
				}
				var listItem = $('.results tbody').children('tr');
				var searchSplit = searchTerm.replace(/ /g, "'):containsi('")
				
				  $.extend($.expr[':'], {'containsi': function(elem, i, match, array){
						return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
					}
				  });		
				  $(".results tbody tr").not(":containsi('" + searchSplit + "')").each(function(e){
					$(this).attr('visible','false');
				  });
				  $(".results tbody tr:containsi('" + searchSplit + "')").each(function(e){
					$(this).attr('visible','true');
				  });
				  var jobCount = $('.results tbody tr[visible="true"]').length;
					$('.counter').text(jobCount + ' item');
				if(jobCount == '0'){$('.no-result').show();}
        else {$('.no-result').hide();}
        
             
        }


    });
    

  });
    
   
    

});
  function clicked_button(id){
    
    $("#book_search").hide();
    $("#book_back").show();
    jQuery.ajax({
      url: "seeker.php",
      data: {
        "user_id": id
      },
        type: "POST",

        success: function(result){
          var filterResult = JSON.parse(result);
            var new_dat = filterResult;
           
                    $("#user_to_book_input_id").val(new_dat.ID);
                    $("#user_to_book_image").attr("src", new_dat.profile);
                    $("#user_to_book_name").text(new_dat.username);
                    $("#user_to_book_description").text(new_dat.description);
                    $("#book_search").hide();
                    $("#book_back").show();
           
        }
  });
}


    </script>
</body>
</html>