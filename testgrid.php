<?php include('header.html'); ?>
<?php include('style.css'); ?>


<link rel="stylesheet" type="text/css" href="gridNavigation.css" />
<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/jquery.gridnav.js"></script>

		<script type="text/javascript">
			$(function() {
				$('#tj_container').gridnav({
					rows	: 2,
					type	: {
						mode		: 'sequpdown', 		// use def | fade | seqfade | updown | sequpdown | showhide | disperse | rows
						speed		: 500,				// for fade, seqfade, updown, sequpdown, showhide, disperse, rows
						easing		: '',				// for fade, seqfade, updown, sequpdown, showhide, disperse, rows	
						factor		: 50,				// for seqfade, sequpdown, rows
						reverse		: false				// for sequpdown
					}
				});
			});
		</script>

<div align="center">
		<div class="container">
			<div class="content example10">
				<div id="tj_container" class="tj_container">
					<div class="tj_nav">
						<span id="tj_prev" class="tj_prev">Previous</span>
						<span id="tj_next" class="tj_next">Next</span>
					</div>
					<div class="tj_wrapper">
						<ul class="tj_gallery">
							<li><a href="#"><img src="images/art/Wall Art/Arabesque1205wc2.jpg" alt="image01" /></a></li>
							<li><a href="#"><img src="images/art/Wall Art/Baroque1206wc.jpg" alt="image02" /></a></li>
							<li><a href="#"><img src="images/art/Wall Art/Calypso1204wc.jpg" alt="image03" /></a></li>
							<li><a href="#"><img src="images/art/Wall Art/Mardi Gras1212wc.jpg" alt="image04" /></a></li>
							<li><a href="#"><img src="images/art/Wall Art/New Dawn1214wc.jpg" alt="image05" /></a></li>
							<li><a href="#"><img src="images/art/Wall Art/Sea Panel1214wc.jpg" alt="image06" /></a></li>
							<li><a href="#"><img src="images/art/Wall Art/Serengeti1217wc.jpg" alt="image07" /></a></li>
							<li><a href="#"><img src="images/art/Wall Art/Spring Comes1213wc.jpg" alt="image08" /></a></li>
							<li><a href="#"><img src="images/art/Wall Art/Travels1201wc.jpg" alt="image09" /></a></li>
							<li><a href="#"><img src="images/art/Wall Art/Triptic1207wc.jpg" alt="image10" /></a></li>
							<li><a href="#"><img src="images/art/Wall Art/TripticSea1212wc.jpg" alt="image11" /></a></li>
							<li><a href="#"><img src="images/art/Wall Art/Tuscan1211wc.jpg" alt="image12" /></a></li>
							<li><a href="#"><img src="images/art/Wall Art/Under the Sea1209wc.jpg" alt="image12" /></a></li>
							<li><a href="#"><img src="images/art/Wall Art/Wall Tile1215wc.jpg" alt="image12" /></a></li>
							<li><a href="#"><img src="images/art/Wall Art/WallTileAutumn1409wc.jpg" alt="image12" /></a></li>
							<li><a href="#"><img src="images/art/Wall Art/WallTileWinter1213wc.jpg" alt="image12" /></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
</div>
<br/>
<br/>
<?php include('contact.html'); ?>
<?php include('footer.html'); ?>