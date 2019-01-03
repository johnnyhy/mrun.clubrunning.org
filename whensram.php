<style>
	#title {
		padding-top: 100px;
		padding-bottom: 0px;
		font-size: 50pt;
		font-family: "Helvetica";
		text-align: center;
		color: white;
	}
	
	#timer {
		margin-top: 50px;
		font-size: 100pt;
		font-family: "Helvetica";
		text-align: center;
		color: white;
	}
	
	body {
        background: url("ram/whensram.jpg") no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
	}
</style>

<body>
	<p id="title">RACE ACROSS MICHIGAN STARTS IN:</p><br>
	<p id="timer"></p>
</body>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Mar 17, 2018 04:45:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("timer").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>