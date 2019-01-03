<?php include "header.php" ?>
<link rel="stylesheet" href="carousel-1.css">

<div id="myCarousel" class="carousel slide race" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
    <div class="item active" id="tf">
      <div class="container">
        <div class="carousel-caption">
          <h1 class="hidden-xs">TRACK &amp; FIELD</h1>
          <h1 class="visible-xs">T&amp;F</h1>
          <p>run fast, turn left</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div style="background:#FFF;position:absolute;width:100%;height:150px;"></div>

<?php 
  $re = "/\#(tf) (\d+)(.*?)#/s";
  $str = file_get_contents("events.txt");
  preg_match($re, $str, $matches);
?>
  <div class="container">
    <div class="row">
      <div class="newsletters col-md-4">
        <ul class="list-group">
          <a target="_blank" href="https://www.google.com/calendar/embed?src=umich.edu_d68unhtrpcd92fsubuo4p8d43c%40group.calendar.google.com&ctz=America/New_York">
            <li class="list-group-item title">
              <?php echo $matches[2]; ?> MEET SCHEDULE
            </li>
          </a>
          <?php 
            $events = $matches[3];
            $events = str_replace("/", "<li class='list-group-item'>" , $events);
            $events = str_replace("\\", "</li>" , $events);
            echo $events; 
          ?>
        </ul>
        <div>
          <a data-toggle="modal" data-target="#results" href="popup/results_xc.html"><div class="link"><span class="glyphicon glyphicon-list-alt link-icon" aria-hidden="true"></span>RESULTS</div></a>
          <a target="_blank" href="https://docs.google.com/spreadsheets/d/1QD2G4O96Aer_HkpGbJFw7GlzDlsqz-XvsVSf0P5fWQE/edit?usp=sharing"><div class="link"><span class="glyphicon glyphicon-link link-icon" aria-hidden="true"></span>RECORDS</div></a>
          <a href="mailto:bmspilka@umich.edu"><div class="link"><span class="glyphicon glyphicon-envelope link-icon" aria-hidden="true"></span>Sprint Training Chair</div></a>
          <a href="mailto:pkkenney@umich.edu"><div class="link"><span class="glyphicon glyphicon-envelope link-icon" aria-hidden="true"></span>Distance Training Chair</div></a>
        </div>
      </div>
      <div class="col-md-7">
	    </br>
      	<p>In the spring, MRun competes at NIRCA track and field meets. There are also no necessary qualifications to take part of the team in track, and anyone who wants to compete is welcome! See the schedules tab for more information on meets.</p>
        <p>The MRun men and women have had many individual top-five finishes in their respective events at the NIRCA Track and Field National Championships, as well as many great overall team performances. In 2016, the MRun women placed third overall in both the Half Marathon and Track and Field Championships. In 2015, the men and women both got the bornze in T&amp;F, while the women took home the gold in the Half Marathon.
        </p> For more information regarding throws, contact Bob Canfield at: <a href="mailto:rccanfi@umich.edu">rccanfi@umich.edu</a>.</p>
        <p>Sprint Training Plan: Workouts will start in the fall. See you then!</p>
        <p>Distance/Mid-Distance Training Plan: Workouts will start in the fall. See you then!</p>
        <p>Field Event Training Plan: Questions should be directed to the Sprint Training Chair.</p>
        <p>If you have any questions about track, Sprint Training Chair Theodore Endresen and Distance Training Chair Anna Piccione will be glad to help!</p>
        </div>
    </div>
  </div>


<div class="modal fade" id="results" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Results</h4>
      </div>
      <div class="modal-body" style="margin-top:20px;">
        <?php 
          $re_2 = "/<\!--TF-->(.+)<\!--TF-->/s";
          $str_2 = file_get_contents("results.html");
          preg_match($re_2, $str_2, $matches_2);
          echo $matches_2[1];
        ?>
      </div>
    </div>
  </div>
</div>

<?php include "footer.php" ?>
