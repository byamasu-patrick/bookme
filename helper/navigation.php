
  <nav>
    <ul>
      <a href="index.php"><li><i class="fa fa-home"></i> HOME</li></a>
      <a href=""><li><i class="fa fa-download"></i> DOWNLOADS</li></a>
      <a href=""><li><i class="fa fa-key"></i> SETTING</li></a>
      <a href="about.html"><li><i class="fa fa-info"></i> ABOUT US</li></a>
    </ul>
    <div class="handle">
      Menu
    </div>
  </nav>

  <script>
    $('.handle').on('click', function(){
      $('nav ul').toggleClass('showing');
    });
  </script>
    <div class="row" style="background-color: #ffffff;">
      
        <div class="col-2 text-break" style="background-color: #4a6774;">
            <div>
                <h4 class="text-center"> <img class="img-fluid rounded-circle" src="<?php echo $_SESSION['profile']; ?>"></h4>
                <h4><?php echo $_SESSION['username']; ?></h4>
                <ul class="vertical-nav-list" style="width: 100%;">
                <a class="vnav-link" href="dashboard.php"><li class="vnav-li" style="color: rgb(255,255,255);" role="toggle">
                    <i class="fa fa-home"></i>&nbsp;Book&nbsp;</li></a>
                    <a class="vnav-link" href="search_to_book.php"><li class="vnav-li">
                      
                        <i class="fa fa-search"></i>&nbsp;Search</li></a>
                        <a class="vnav-link" href="#"><li class="vnav-li"><i class="fa fa-send"></i>&nbsp;Send Message</li></a>
                        <a class="vnav-link" href="#"><li class="vnav-li"><i class="material-icons">event_seat</i>&nbsp;Events&nbsp;</li></a>
                        <a class="active-link vnav-link"><li class="vnav-li"><i class="fa fa-cog"></i>&nbsp;Setting<span class="active-link traingle-left"> </span></li></a>
                        <a class="vnav-link" href="logout.php"><li class="vnav-li"><i class="fa fa-eject"></i> Logout</li></a>
                </ul>
            </div>
        </div>
