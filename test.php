<?php include('header.html'); ?>
<?php include('style.css'); ?>
<script type="text/javascript" src="js/jquery.min.js"></script>
 
<!-- Load the CloudCarousel JavaScript file -->
<script type="text/JavaScript" src="js/cloud-carousel.1.0.5.js"></script>
 
<script language="JavaScript" type="text/javascript">

$(document).ready(function(){
						   
	// This initialises carousels on the container elements specified, in this case, carousel1.
	$("#carousel1").CloudCarousel(
		{
			xPos: 500,
			yPos: 65,
			buttonLeft: $("#left-but"),
			buttonRight: $("#right-but"),
			altBox: $("#alt-text"),
			titleBox: $("#title-text")
		}
	);
});

</script>
 
</head>
    <body>

<br/>
    <div align="center">
        <div id = "carousel1" style="width:1000px; height:400px;background: url(images/bg/11.jpg) no-repeat fixed center top; background-size:100%; overflow:scroll;">
            <a href="images/art/Wall Art/Arabesque1205wc2.jpg" title="Arabesque">
            <img class = "cloudcarousel" src="images/art/Wall Art/Arabesque1205wc2.jpg" alt="Arabesque Description" title="Arabesque" />
            </a>

            <a href="images/art/Wall Art/Baroque1206wc.jpg" title="Baroque">
            <img class = "cloudcarousel" src="images/art/Wall Art/Baroque1206wc.jpg" alt="Baroque Description" title="Baroque" />
            </a>

            <img class = "cloudcarousel" src="images/art/Wall Art/Calypso1204wc.jpg" alt="Calypso Description" title="Calypso" />
            <img class = "cloudcarousel" src="images/art/Wall Art/Mardi Gras1212wc.jpg" alt="Mardi Gras Description" title="Mardi Gras" />
            <img class = "cloudcarousel" src="images/art/Wall Art/New Dawn1214wc.jpg" alt="New Dawn Description" title="New Dawn" />
            <img class = "cloudcarousel" src="images/art/Wall Art/Rainy Day1208wc.jpg" alt="Rainy Day Description" title="Rainy Day" />

            <div id="left-but" class="carouselLeft" style="position:absolute;top:20px;left:10px;"></div>
            <div id="right-but" class="carouselRight" style="position:absolute;top:20px;right:10px;"></div>      
        </div>
        
        <!-- Define elements to accept the alt and title text from the images. -->
        <p id="title-text"></p>
        <p id="alt-text"></p>
    </div>
<br/>

    </body>
</html>