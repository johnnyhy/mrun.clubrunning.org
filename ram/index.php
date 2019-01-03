

<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <link href='http://fonts.googleapis.com/css?family=Montserrat:700,400' rel='stylesheet' type='text/css'>

    <link href='http://fonts.googleapis.com/css?family=Oleo+Script' rel='stylesheet' type='text/css'>



    <link rel='shortcut icon' href='../icons/favicon.ico'>

    <meta property="og:image" content="../icons/mrun_social_media_icon.png"/>

    <meta property="og:image:secure_url" content="../icons/mrun_social_media_icon.png" />



    <title>Race Across Michigan</title>



    <!-- Bootstrap core CSS -->

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <link rel="stylesheet" href="../style-1.css">

  </head>



<body>

  <nav class="navbar navbar-inverse navbar-fixed-top">

    <div class="container">

      <div class="navbar-header">

        <!--Mobile Menu Button-->

        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

          <span class="sr-only">Toggle navigation</span>

          <span class="icon-bar"></span>

          <span class="icon-bar"></span>

          <span class="icon-bar"></span>

        </button>



        <!--MRun logo and Title-->

        <a href="http://mrun.clubrunning.org/index"><img class="navbar-brand hidden-lg" src="../icons/mrun.png" />

        <a class="navbar-brand visible-lg" style="text-transform:uppercase;font-size:14px;" href="/"> University of Michigan Running Club</a>



      </div>



      <div id="navbar" class="collapse navbar-collapse">

        <ul class="nav navbar-nav">



          <li id="link1"><a href="/ram">Home</a></li><!-- EDIT THIS-->

          <!-- <li id="ram_events"><a href="ram_events.php">Events</a></li> -->

          <li id="link2"><a href="ram_sponsors.html">Sponsors</a></li><!-- Keep link1 in href and id the same value-->

          <li id="link3"><a href="ram_donate.html">Make a Donation</a></li>

          <li class="navbar-right"><a href="mailto:ramcoordinators@umich.edu">Email us</a></li>





        </ul>

      </div><!--/.nav-collapse -->

    </div>

  </nav>


<!-- EDIT THIS-->

<link rel="stylesheet" href="../carousel-1.css">

<style>
.carousel .item#ram {
  background: url("bg-ram.jpg");
  background-size: cover;
  background-position: 50% 25%;
}
#change-margin {
	padding-bottom: 0px;
}
</style>

<div id="myCarousel" class="carousel slide race" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
    <div class="item active" id="ram">
      <div class="container">
        <div id="change-margin" class="carousel-caption">
          <h1>THE 11th ANNUAL <br/> RACE ACROSS MICHIGAN</h1>
          <p>1 team. 24 hours. 184 miles.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div style="background:#FFF;width:100%;height:150px;position:absolute;"></div>


<div class="row" style="width:96%;margin-left:2%;">


<!--<?php 
  $re = "/\#(ram) (\d+)(.*?)#/s";
  $str = file_get_contents("../events.txt");
  preg_match($re, $str, $matches);
?>
<div class="container" style="margin-bottom:100px;">
  <div class="row">
    <div class="newsletters col-md-4">
            <ul class="list-group">
              <a target="_blank" href="https://www.google.com/calendar/embed?src=umich.edu_d68unhtrpcd92fsubuo4p8d43c%40group.calendar.google.com&ctz=America/New_York">
                <li class="list-group-item title">
                  RAM SCHEDULE <?php echo $matches[2]; ?>
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
          <div class="col-md-7" style="margin-top:0px;">-->
<div class="col-md-8 col-md-offset-2" style="margin-top:20px;">
    <!--

    <p> <b><em>Update:</em></b> The Special Olympics has released a press statement about this event across the state of Michigan. Here is the release <a target="_blank" href="Press Release.pdf"> Special Olympics Press Release </a> </p>

    -->
    <h2 class="page-header"> What is Race Across Michigan (RAM)?</h2>

    <p>
      Race Across Michigan is a fundraising event &mdash; coordinated by the University of Michigan Running Club (MRun) &mdash; that benefits the Special Olympics. In 2017, we crossed the state of Michigan in under 24 hours as most members ran between 10 and 25 miles of the 184 mile relay. After beginning in Detroit, we turned onto Michigan Avenue, followed it through Dearborn, Ann Arbor, Jackson, Albion, Battle Creek, and Kalamazoo before finally finishing in South Haven. MRun has raised a total of over $100,000 for the Special Olympics since RAM's inception in 2009.</p>
    <p>
     On March 23rd 2019, we will again run across the state of Michigan in under a day's time and, the event being preceded by numerous fundraising events and the joint efforts of numerous sponsors and families, we hope to raise over $30,000 for the Special Olympics. We would greatly appreciate if you help us achieve this goal.</p>

    <h2 class="page-header"> What is the Special Olympics? </h2>
    <p>
      Special Olympics is "the world's largest sports organization for children and adults with intellectual disabilities, providing year-round training and competitions to more than 4.5 million athletes in 170 countries." This event directly benefits the Special Olympics Michigan, Area 20 (Washtenaw County). Area 20 is home to over 1,000 athletes who participate in basketball, soccer, cross-country, and seven other athletic events. They provide athletic activities and training year-round to athletes without charge to them or their families. Training and competition is open to every person with intellectual disabilities who registers to participate in Special Olympics. You can find out more about Special Olympics Michigan, Area 20 at <a target="_blank" href="http://www.somi.org/area20/">somi.org</a>.</p>

    <h2 class="page-header">How Can You Help? </h2>
    <p>
      Businesses can donate directly to the cause by visiting the <a target="_blank" href="http://mrun.clubrunning.org/ram/ram_sponsors.html">sponsors</a> tab at the top of the page. For individuals that would like to donate, please visit the <a target="_blank" href="http://mrun.clubrunning.org/ram/ram_donate.html">donations</a> page above. You can email us directly with any questions at <a href="mailto:ramcoordinators@umich.edu" target="_top">ramcoordinators@umich.edu</a>.</p>
    <p>Check out our FirstGiving page below!</p>
      <a target="_blank" href="https://www.firstgiving.com/somiarea/raceacrossmi2019"><div class="link"><span class="glyphicon glyphicon-link link-icon" aria-hidden="true"></span>RAM First Giving Page</div></a>
  </div>

</div>

<style>
div#footer {
  width:100%;
  background:#FFF;
  /*background-image:url("../icons/stripes.png");*/
  height:100px;
}
</style>

<div id="footer">
  
</div>
































    <!--JQuery-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <!--Bootstrap-->

    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <!-- Google Analytics-->

    <script>

      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-57198287-1', 'auto');

      ga('send', 'pageview');

    </script>



    <!--Script-->

    <script>

      $(function() {

        $(".dropdown").hover(

          function(){ $(this).addClass('open')},

          function(){ $(this).removeClass('open') }

        );

        $("nav ul li").hover(

          function(){

            $(this).addClass('active')

          },

          function(){

            if($(this).hasClass('current'))return;

            $(this).removeClass('active')

          }

        );



        {

          try {

            var file = document.location.href.match(/[^\/]+$/)[0];

            id = "#" + file;

            id = (id=="#tf" || id=="#xc") ? "#races" : (id=="#current"||id=="#prospective") ? "#members" : (file.substr(0,4)=="news") ? "#news" : id;   //something has to be done here

                                                                                                                                                        //but idk what i forget

          }

          catch(e) {

            id = "#index";

          }

          $(id).addClass("active current");

        }



      });



      window.onload = function(){

        var images = new Array();

        var imagesNames = new Array();

        function preload() {

          for (i = 0; i < preload.arguments.length; i++) {

            images[i] = new Image()

            images[i].src = preload.arguments[i]

          }

        }

        for(var i=2; i<=3; i++) imagesNames.push("bg/bg-slide-"+i+".jpg");

        preload(imagesNames);

      }



      $("#scroll-more-info").click(function(){

        var loc = $("#more-info").offset().top;

        $("body,html").animate({scrollTop: loc},400);

      });



      var TOP = ($(".carousel").hasClass("race")) ? -200 : 5;

      document.addEventListener("scroll", function(){

        var top = $(document).scrollTop();

        $(".carousel").css({

          "top": TOP+(top/4)

        });

      })

    </script>

  </body>

</html>

