<!DOCTYPE html>
<html lang="id">
  <head>
    <meta name="theme-color" content="#03a9f4">
    <meta name="description" content="Faruqi Ikhsan, Creative freelance programmer">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/materialize.min.css"  media="screen,projection"/>
    <title>My Portofolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body class="blue lighten-3">

    <header >
			<div class="navbar-fixed">
				<nav>
					<div class="nav-wrapper blue">
						<div class="container">
							<div style="margin-left: 20px;margin-right: 20px ">
								<ul class="left ">
									<li>
										<a class=" white-text tooltipped" data-position="bottom" data-delay="50" data-tooltip="Main" href="#" >
											<i class="material-icons">dashboard</i>
										</a>
									</li>
								</ul>
								<ul class="right">
									<li>
										<a href="#CV" class="white-text">
											Curiculum Vitae
										</a>
									</li>
									<li>
										<a href="#Portofolio" class="white-text">
											Portofolio
										</a>
									</li>
                  <li>
										<a href="#Contact" class="white-text">
											Contact
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</nav>
			</div>
		</header>
		<main>
      <div class="parallax-container" style="height:580px" >
  			<div class="parallax"><img src="<?php echo base_url(); ?>assets/img/parallax-bg-2.png"></div>
        <div class="row" style="margin-top:13%">
          <div class="col l12 s12">
            <h1 class="center-align header white-text" style="font-family: Calibri;text-shadow: -2px 2px black"><?php echo strtoupper ($ownerName[0]->owner_name) ?></h1>
            <h3 class="center-align white-text" style="font-family: Times;text-shadow: -2px 2px black"><?php echo $ownerName[0]->tagline ?></h3>
          </div>
        </div>
  		</div>
  		<div id="CV" class="section scrollspy blue lighten-3">
        <div class="container">
          <div class="row">
            <h2 class="header">Curiculum Vitae</h2>
          </div>
          <div class="row">
            <div class="col l12 s12">
              <ul class="collapsible orange accent-2 hooverable" data-collapsible="expandable">
              <?php foreach($cv as $row){ ?>
                <li>
                  <div class="collapsible-header orange accent-2 white-text"><h4><i class="material-icons">label</i><?php echo $row->judulKonten ?></h4></div>
                  <div class="collapsible-body white lighten-2 black-text center-align"><p><h5><?php echo $row->Konten ?></h5></p></div>
                </li>
              <?php } ?>
              </ul>
            </div>

          </div>
        </div>
  		</div>
  		<div class="parallax-container">
  			<div class="parallax"><img src="<?php echo base_url(); ?>assets/img/parallax-bg-2.jpg"></div>
  		</div>
      <div id="Portofolio" class="section scrollspy blue lighten-3">
        <div class="container">
          <div class="row">
            <h2 class="header white-text">Portofolio</h2>
          </div>
          <div class="row">
            <?php foreach($portofolio as $row){ ?>
              <div class=" col l4 s6">
                <div class="card amber darken-4">
                 <div class="card-image waves-effect waves-block waves-light">
                   <img class="activator" src="<?php echo base_url(); ?>assets/img/portofolio.png">
                 </div>
                 <div class="card-content white">
                   <span class="card-title activator grey-text text-darken-4"><?php echo $row->judulKontenPort ?><i class="material-icons right">more_vert</i></span>
                 </div>
                 <div class="card-reveal">
                   <span class="card-title grey-text text-darken-4"><?php echo $row->judulKontenPort ?><i class="material-icons right">close</i></span>
                   <p><?php echo $row->Konten ?></p>
                 </div>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
  		</div>
    </main>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.min.js"></script>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDmk-TSUWW9INJiMt6f4E10AOdUwYdEXV4&callback=initMap">
    </script>
    <script>
			$(document).ready(function(){
			  $('.parallax').parallax();
        $('.scrollspy').scrollSpy();
        document.getElementById('secretButton').click();
			});
      function initMap() {
        var myLatLng = {lat: -6.9759492, lng: 107.6303316};
        var map = new google.maps.Map(document.getElementById('map'), {
          center: myLatLng,
          zoom: 10,
          disableDefaultUI: true
        });
        
        var geocoder = new google.maps.Geocoder();
        document.getElementById('secretButton').addEventListener('click', function() {
          geocodeAddress(geocoder, map);
        });

      }

      function geocodeAddress(geocoder, resultsMap) {
      var address = '<?php echo " ".$ownerName[0]->Alamat ?>';
      geocoder.geocode({'address': address}, function(results, status) {
        if (status === google.maps.GeocoderStatus.OK) {
          resultsMap.setCenter(results[0].geometry.location);
          var marker = new google.maps.Marker({
            map: resultsMap,
            position: results[0].geometry.location
          });
        } else {
          alert('Geocode was not successful for the following reason: ' + status);
        }
      });
      }
		</script>
  </body>
  <footer class="page-footer blue scrollspy" id="Contact">
    <div class="container">
      <div class="row">
        <div class="col l9 s9">
          <a class="waves-effect waves-light btn red lighten-2" id="secretButton"><i class="material-icons right">place</i>Find Me</a>
          <!--<h5 class="white-text"><i class="material-icons">place</i>Find Me </h5>-->
          <p class="white-text"><i class="material-icons tiny">home</i><?php echo " ".$ownerName[0]->Alamat ?></p>
          <div id="map" style="height:300px"></div>
        </div>
        <div class="col l3 s3">
          <h5 class="white-text"><i class="material-icons">phone</i>Contact Me</h5>
          <ul>
            <li><p class="grey-text text-lighten-4"><?php echo " ".$ownerName[0]->Phone ?></p></li>
            <li><a href="https://twitter.com/faruqisan" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @faruqisan</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        ©<?php echo " ".date('Y')." ".$ownerName[0]->owner_name; ?>
      </div>
    </div>
  </footer>
</html>
