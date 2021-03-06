<?php include "header.php" ?>
<link rel="stylesheet" href="carousel.css">

<div id="myCarousel" class="carousel slide race" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
    <div class="item active" id="current">
      <div class="container">
        <div class="carousel-caption">
          <h1>CURRENT MEMBERS</h1>
          <p>welcome back!</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div style="background:#FFF;width:100%;height:150px;position:absolute;"></div>

<?php 
  $re = "/\#(current) (\d+)(.*?)#/s";
  $str = file_get_contents("events.txt");
  preg_match($re, $str, $matches);
?>
<div class="container" style="margin-bottom:100px;">
  <div class="row">
    <div class="newsletters col-md-4">
            <ul class="list-group">
              <a target="_blank" href="https://www.google.com/calendar/embed?src=umich.edu_d68unhtrpcd92fsubuo4p8d43c%40group.calendar.google.com&ctz=America/New_York">
                <li class="list-group-item title">
                  <?php echo $matches[2]; ?> EVENTS
                </li>
              </a>
              <?php 
                $events = $matches[3];
                $events = str_replace("/", "<li class='list-group-item'>" , $events);
                $events = str_replace("\\", "</li>" , $events);
                echo $events; 
              ?>
            </ul>
          </div>
          <div class="col-md-7" style="margin-top:20px;">
      <p>If you haven't already filled out your Maize Page waiver forms, then you can't run in any meets! The link to Maize Pages is at the bottom of the page.</p>
      <p>All checks for MRun transactions should be made out to "University of Michigan" with "Running club" in the memo line. Talk to the swag chair, Will Sollish, to order swag, and talk to any board members at office hours to sign up and pay for meets.</p>
      <p>If you are already in MRun, then you can join our Facebook group: MRun Fun! You should also check out our calendar of upcomming events, view race photos on NIRCA, and see potential routes on the MapMyRun app.</p>
    </div>
  </div>
</div>

    <div class="hidden-xs stripes" style="height:420px;"></div>
    <div class="hidden-sm hidden-md hidden-lg stripes" style="height:100px;"></div>
    <div class="container marketing" style="margin-top:-80px;">
      <!-- Three columns of text below the carousel -->
      <div class="row icons hidden-lg hidden-md hidden-sm" style="margin-top:55px">
        <a target="_blank" href="https://www.facebook.com/groups/571783862880286/">
          <div class="col-xs-4">
            <img class="img-circle" src="icons/facebook.png" alt="Facebook" width="50" height="50">
          </div><!-- /.col-lg-4 -->
        </a>
        <a target="_blank" href="https://maizepages.umich.edu/organization/mrun">
          <div class="col-xs-4">
            <img class="img-circle" src="icons/maize.png" alt="Records" width="50" height="50">
          </div><!-- /.col-lg-4 -->
        </a>
        <a target="_blank" href="http://www.clubrunning.org/">
          <div class="col-xs-4">
            <img class="img-circle" src="icons/nirca.png" alt="Donate" width="50" height="50">
          </div><!-- /.col-lg-4 -->
        </a>
      </div><!-- /.row -->
      <div class="row icons hidden-xs" style="margin-top:110px">
        <a target="_blank" href="https://www.facebook.com/groups/571783862880286/">
          <div class="col-sm-4 col-xs-6">
            <img class="img-circle" src="icons/facebook.png" alt="Facebook" width="140" height="140">
            <span class="hidden-xs">
              <h2>MRun Fun!</h2>
              <p>Join our Facebook group</p>
            <span>
          </div><!-- /.col-lg-4 -->
        </a>
        <a target="_blank" href="https://maizepages.umich.edu/organization/mrun">
          <div class="col-sm-4 col-xs-6">
            <img class="img-circle" src="icons/maize.png" alt="Records" width="140" height="140">
            <span class="hidden-xs">
              <h2>Maize Pages</h2>
              <p>Make sure you fill these out!</p>
            <span>
          </div><!-- /.col-lg-4 -->
        </a>
        <a target="_blank" href="http://www.clubrunning.org/">
          <div class="col-sm-4 col-xs-6">
            <img class="img-circle" src="icons/nirca.png" alt="Donate" width="140" height="140">
            <span class="hidden-xs">
              <h2>NIRCA</h2>
              <p>For more info about our conference!</p>
            </span>
          </div><!-- /.col-lg-4 -->
        </a>
      </div><!-- /.row -->
    </div>

<?php include "footer.php" ?>