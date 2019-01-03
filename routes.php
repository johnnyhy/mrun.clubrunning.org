<?php include "header.php" ?>
<link rel="stylesheet" href="/carousel.css">

<div class="carousel slide race">
  <div class="carousel-inner" role="listbox">
    <div class="item active" id="routes">
      <div class="container">
        <div class="carousel-caption">
          <h1>ROUTES</h1>
          <p>3, 5, 7, and long runs!</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="hidden-sm hidden-xs" style="background:#FFF;width:100%;position:absolute;height:150px;"></div>

<div class="container hidden-sm hidden-xs">
	<div class='row'>
    <!--ROUTES SIDE BAR-->
		<div class="routes">
		<ul class='list-group col-xs-3'>
			<li class='list-group-item title'>ROUTES	</li>
			  <ul class="list-group">
				
				<?php 
					$routes_file = fopen("routes.txt", 'r');
					$route_id = 0;
					while (($line = fgets($routes_file)) !== false){
						echo("<li class='list-group-item route' onclick='loadQueryResults(" . (string)$route_id . ")'>" . $line . "</li>");
						$route_id = $route_id + 1;
					}
					fclose($routes_file);
				?>
			  </ul>
		</ul>
		<div class='col-xs-8' id="data">
			<center><h1>Select a route from the left menu</h1></center>
		</div>
		</div>
	</div>
	
</div>


<div class="container hidden-lg hidden-md">
	<br><br><br><br><br><br><br><br>
	<h1>Sorry, MRun routes are currently unavailable on mobile. </h1>
</div>

<!--MOBILE ROUTES
<div class="container hidden-lg hidden-md">
	
	<div class='row'>
		</br></br>
		<form method='post'>
		<div class="routes-mobile">
			<select name='routes' id='route' data-native-menu='false' onChange='changeFunc()'>
				<?php 
					$routes_file = fopen("routes.txt", 'r');
					$line = fgets($routes_file);
					$route_id = 0;
					while (($line = fgets($routes_file)) !== false){
						echo("<option value='" . (string)$route_id . "'>" . $line . "</option>");
						$route_id = $route_id + 1;
					}
					fclose($routes_file);
				?>
			</select>
		</div>
		</form>
		
	</div>
	
	<div class='col-xs-12' id="data">
		<center><h1>Select a route above</h1></center>
	</div>
	
<script type='text/javascript'>

	function changeFunc(){
		
		someValue = $('select[name=routes]').val()
		$('#data').load('routes/' + someValue + '.php');
	}
	
</script>
-->

<script>
	function loadQueryResults(id) {
		$('#data').load('/routes/' + id + '.php');
	
	}
	
	if (window.location.hash){
		loadQueryResults(window.location.hash.substring(1));
	}
</script>

</div>

<?php include "footer.php" ?>