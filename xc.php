<?php include "header.php" ?>
<link rel="stylesheet" href="carousel-1.css">


<!-- START THE FEATURETTES-->
<div class="carousel slide race">
  <div class="carousel-inner">
    <div class="item active" id="xc">
      <div class="container">
        <div class="carousel-caption">
          <h1 class="hidden-xs">CROSS-COUNTRY</h1>
          <h1 class="visible-xs">XC</h1>
          <p>6k, 8k, 2k17</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div style="background:#FFF;width:100%;height:150px;position:absolute;"></div>
  <?php 
    $re = "/\#(xc) (\d+)(.*?)#/s";
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
          <a href="mailto:annapicc@umich.edu"><div class="link"><span class="glyphicon glyphicon-envelope  link-icon" aria-hidden="true"></span>Distance Training Chair</div></a>
        </div>
      </div>

      <div class="col-md-7" style="margin-top:20px;">
        <p>In the fall, MRun competes in NIRCA cross-country races. There are no tryouts, cuts, or qualifying times for the team, so anyone who wants to race is welcome! Most races are 8k for men and 6k for women, with a few 5k races sprinkled in. MRun travels to several local NIRCA meets, as well as a select few collegiate varsity races. See the schedules tab for more information on races.</p>
        <p>MRun enjoys a reputation as one of the most competitive clubs in the nation. The men and women compete in and have finished very well in the national championships every year since the inception of NIRCA. Last year, the women finished very well in Lexington and took home the bronze. In 2014 MRun celebrated two great finishes at the NIRCA Cross-Country National Championships, as the men's team brought home a silver and the women's team brought home the gold.The women were national champions in 2008, while the men's team brought home the gold in 2010.</p>
        <p>Cross-country training plans are included in the weekly e-mails sent out by the training chairs. Tuesday and Thursday workouts start in September, with start times alternating between regular 4:15 practice at the CCRB and evening workouts at the varsity outdoor track.</p>
        <p>If you have any questions with regard to XC, feel free to contact our Distance Training Chair, Anna Piccione! She'll be glad to help.</p>
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
      <div class="modal-body">
        <?php 
          $re_2 = "/<\!--XC-->(.+)<\!--XC-->/s";
          $str_2 = file_get_contents("results.html");
          preg_match($re_2, $str_2, $matches_2);
          echo $matches_2[1];
        ?>
      </div>
    </div>
  </div>
</div>


<?php include "footer.php" ?>
