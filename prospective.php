<?php include "header.php"; ?>
<link rel="stylesheet" href="carousel.css">

<div class="carousel slide race">
  <div class="carousel-inner">
    <div class="item active" id="prospective">
      <div class="container">
        <div class="carousel-caption">
          <h1>PROSPECTIVE MEMBERS</h1>
          <p>join MRun!</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div style="background:#FFF;width:100%;height:150px;position:absolute;"></div>
<!-- START THE FEATURETTES-->

<?php 
  $re = "/\#(prospective) (\d+)(.*?)#/s";
  $str = file_get_contents("events.txt");
  preg_match($re, $str, $matches);
?>
<div class="container">
  <div class="row">
    <div class="newsletters col-md-4">
	    <ul class="list-group">
		  <li class="list-group-item title">INTRODUCE YOURSELF!</li>
        </ul>
      <div>
        <a href="mailto:mrunpresident@umich.edu"><div class="link"><span class="glyphicon glyphicon-envelope  link-icon" aria-hidden="true"></span>President and Vice-President</div></a>
		<a href="mailto:mruntrainingchairs@umich.edu"><div class="link"><span class="glyphicon glyphicon-envelope  link-icon" aria-hidden="true"></span>Training Chairs</div></a>
		<a href="mailto:mrunsocialchairs@umich.edu"><div class="link"><span class="glyphicon glyphicon-envelope  link-icon" aria-hidden="true"></span>Social Chairs</div></a>
		<a href="mailto:turrimck@umich.edu"><div class="link"><span class="glyphicon glyphicon-envelope  link-icon" aria-hidden="true"></span>Travel Coordinator</div></a>
		<a href="mailto:kevibuck@umich.edu"><div class="link"><span class="glyphicon glyphicon-envelope  link-icon" aria-hidden="true"></span>Treasurer</div></a>
		<a href="mailto:ulathia@umich.edu"><div class="link"><span class="glyphicon glyphicon-envelope  link-icon" aria-hidden="true"></span>Marketing and Fundraising</div>
		<a href="mailto:lydbier@umich.edu"><div class="link"><span class="glyphicon glyphicon-envelope  link-icon" aria-hidden="true"></span>Community Service Chair</div></a>
		<a href="mailto:mrun.swag@umich.edu"><div class="link"><span class="glyphicon glyphicon-envelope  link-icon" aria-hidden="true"></span>SWAG Chair</div></a>
		<a href="mailto:mrun-webmaster@umich.edu"><div class="link"><span class="glyphicon glyphicon-envelope  link-icon" aria-hidden="true"></span>Webmaster</div></a>
      </div>
    </div>
    <div class="col-md-7" style="margin-top:20px;margin-bottom:100px;">
      <p>MRun welcomes all athletes, regardless of speed or ability level. If you're a runner or would like to start running, MRun is the perfect club for you. All members of MRun have one thing in common: they love to run! (Unless you're into field events, in which that case, that's cool too!)</p>
      <p>MRun offers daily training runs of 3, 5, and 7 miles every weekday, as well as long runs of 8-12 miles on Sunday mornings (more training information, including time and location, is available in the calendar on the left and the FAQ section below!). If you are interested in competing, MRun travels to cross-country meets in the fall, and track and field meets in the winter and spring. Nothing in MRun is required, so you are free to attend as many or as few practices and meets as you would like.</p>
      <p>If you would like more information about MRun, make sure to come to the Fall Mass Meeting in the Michigan Union Ballroom! Also, feel free to come to any weekday practice at 4:15 at the Central Campus Recreation Building (CCRB), and you can contact any of the officers from the contact page if you have any questions!</p>
      <p>All ability levels are welcome!</p>
    </div>
  </div>
  
  <iframe id='hypevid' width="1080" height="590" src="https://www.youtube.com/embed/LSZ1pWoZkpQ" frameborder="0" allowfullscreen></iframe>
  
</div>

    <div class="hidden-xs stripes" style="height:350px;"></div>
    <div class="hidden-sm hidden-md hidden-lg stripes" style="height:100px;"></div>
    <div class="container marketing" style="margin-top:-80px;">
      <!-- Three columns of text below the carousel -->
      <div class="row icons hidden-lg hidden-md hidden-sm" style="margin-top:50px">
        <a target="_blank" href="http://mrun.clubrunning.org/mass_meet_slides.pdf">
          <div class="col-xs-4">
            <img class="img-circle" src="icons/ppt.png" alt="Records" width="50" height="50">
          </div>
        </a>
        <a target="_blank" href="http://recsports.umich.edu/clubs/running">
          <div class="col-xs-4">
            <img class="img-circle" src="icons/rec.png" alt="News" width="50" height="50">
          </div><!-- /.col-lg-4 -->
        </a>
        <a target="_blank" href="contact.php">
          <div class="col-xs-4">
            <img class="img-circle" src="icons/news.png" alt="Donate" width="50" height="50">
          </div>
        </a>
      </div><!-- /.row -->
      <div class="row icons hidden-xs" style="margin-top:75px">
        <a target="_blank" href="http://mrun.clubrunning.org/mass_meet_slides.pdf">
          <div class="col-sm-4 col-xs-4">
            <img class="img-circle" src="icons/ppt.png" alt="Records" width="140" height="140">
            <span class="hidden-xs">
              <h2>Slideshow</h2>
              <p>Mass meeting slides</p>
            <span class="hidden-xs">
          </div><!-- /.col-lg-4 -->
        </a>
        <a target="_blank" href="http://recsports.umich.edu/clubs/running">
          <div class="col-sm-4 col-xs-4">
            <img class="img-circle" src="icons/rec.png" alt="News" width="140" height="140">
            <span class="hidden-xs">
              <h2>Rec Sports</h2>
              <p>You can find our university rec sports site here</p>
            </span>
          </div><!-- /.col-lg-4 -->
        </a>
        <a target="_blank" href="contact.php">
          <div class="col-sm-4 col-xs-4">
            <img class="img-circle" src="icons/news.png" alt="Donate" width="140" height="140">
            <span class="hidden-xs">
              <h2>Contact</h2>
              <p>If you have any other questions, feel free to contact us!</p>
            </span>
          </div><!-- /.col-lg-4 -->
        </a>
      </div><!-- /.row -->
    </div>

    <div class="container">
      <div class="row" style="margin-top:75px">
        <div class="col-md-8 col-md-offset-2">
          <h1>Frequently Asked Questions</h1>
          <p class="q">Am I fast enough to join MRun?</p>
  <p>Absolutely! MRun has runners of all abilities and everyone is welcome to join us on our daily runs. No matter how fast you are, there are always other people who are just as fast and excited to run with you. If you're still worried, come try out a run with us!</p>
  <p class="q">How long are the runs?</p>
  <p>Daily runs are held Monday through Friday and three distances are offered: a 3, 5, and 7+ mile run. On Sundays a long run group meets and offers distances of 8, 10, and 13+ miles.</p>
  <p class="q">When and where does MRun meet?</p>
  <p>MRun meets for daily runs Monday through Friday at 4:15 PM at the end of the bridge in front of the Central Campus Recreation Building (<a href="https://goo.gl/maps/6ZKVFHXnHgH2" target="_blank">map link</a>). On Sunday mornings, a group meets at 10:15 AM for a long run in the same place. In addition to normal runs, distance and sprint workouts are held each Tuesday and Thursday. During cross-country season, the Tuesday workouts are held in the evening at 8:30 PM at the varsity outdoor track (<a href="https://goo.gl/maps/oj72NLcc42L2" target="_blank">map link</a>), while the Thursday workouts start at the same time and place as normal practice (4:15 at the CCRB). During track season, the workouts are held at night at the vartsity indoor track (<a href="https://goo.gl/maps/dwfZUFk4HUv" target="_blank">map link</a>): the Tuesday workouts begin at 9 PM, while the Thursday workouts start at 7 PM. In the summer, MRun meets at the CCRB Monday through Friday, but at 6:15 PM (due to many runners having internships/jobs that stay in Ann Arbor over the summer).</p>
  <p class="q">Does MRun ever compete?</p>
  <p>MRun participates in a variety of cross-country, indoor track, and outdoor track meets in Michigan and neighboring states ranging from club meets to varsity races. For cross-country, men typically run the 8k and women run the 6k. For track, every event offered at a varsity track meet is available. In MRun, we have people competing in every event, from the 100m, to the 10k, to the steeplechase, to the triple jump.</p>
  <p class="q">What parts of MRun are mandatory?</p>
  <p>None of it! Absolutely no MRun events are mandatory, including daily practice, workouts, and meets. Some members only come to daily practice and never do workouts or meets, while others can only come a few days per week because of class time conflicts, and there are those that fair warm weather, only coming in the fall or spring. The most important thing to remember about MRun is to do whatever you want in the club, whether that's relieving stress with a casual daily run or training to compete and set new PRs!</p>
  <p class="q">Does MRun run all year long?</p>
  <p>Yes! MRun meets all year long, even throughout the entire winter.</p>
  <p class="q">Are there sprinters or field event competitors in MRun?</p>
  <p>Yes! MRun's group of sprinters and field event competitors is highly competitive and growing. If you competed in high school track and field, this is the perfect opportunity to continue your track and field career and even compete against various varsity teams in addition to club teams. If you are new to track and field and hoping to get involved, every level of competition is available and we would love to have you join. There are no tryouts and we encourage all types of runners, new and old.</p>
  <p class="q">I'm afraid I'll feel left out because everyone in MRun already knows each other!</p>
  <p>While a lot of MRunners know each other already, new people come to run all the time throughout the year. The club is very welcoming and all MRunners enjoy meeting new people and running with them. Coming out in the fall at the beginning of the school year especially has the advantage of the presence of tons of other new runners to meet and become friends with.</p>
  <p class="q">How do I get started?</p>
  <p>Just show up and run with us!</p>

        </div>
      </div>
    </div>

<?php include "footer.php" ?>