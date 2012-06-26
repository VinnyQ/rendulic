<?php include('header.html'); ?>
<?php include('style.css'); ?>
<link rel="stylesheet" href="nivo-default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
<div align="center">
<table align="center" border="0" cellspacing="10" cellpadding="10" width="80%">
	<tr>
		<td align="center" valign="top"><font class="header_small">Art Gallery</font></td>
	</tr>
	<tr>
		<td align="center" valign="top">


    <div id="wrapper">

        <div class="slider-wrapper theme-default controlnav-thumbs">
            <div id="slider" class="nivoSlider">
                <a href="detail.php?title=African Bowl">
                <img src="images/art/Art/African Bowl1205ac.jpg" data-thumb="images/art/Art/African Bowl1205ac.jpg" title="African Bowl" />
                </a>

                <a href="detail.php?title=Aztec Bowl">
                <img src="images/art/Art/Aztec Bowl1206ac.jpg" data-thumb="images/art/Art/Aztec Bowl1206ac.jpg" title="Aztec Bowl" />
                </a>

                <a href="detail.php?title=Aztec Square">
                <img src="images/art/Art/Aztec Square1201ac.jpg" data-thumb="images/art/Art/Aztec Square1201ac.jpg" alt="" title="Aztec Square" />
                </a>

                <a href="detail.php?title=Damask">
                <img src="images/art/Art/Damask1210ac.jpg" data-thumb="images/art/Art/Damask1210ac.jpg" alt="" title="Damask" />
                </a>

                <a href="detail.php?title=Florence Bowl">
                <img src="images/art/Art/Florence Bowl1207ac.jpg" data-thumb="images/art/Art/Florence Bowl1207ac.jpg" alt="" title="Florence Bowl" />
                </a>

                <a href="detail.php?title=Gilded Lace">
                <img src="images/art/Art/Gilded Lace1210ac.jpg" data-thumb="images/art/Art/Gilded Lace1210ac.jpg" alt="" title="Gilded Lace" />
                </a>

                <a href="detail.php?title=Pathways">
                <img src="images/art/Art/Pathways1203ac.jpg" data-thumb="images/art/Art/Pathways1203ac.jpg" alt="" title="Pathways" />
                </a>

            </div>
            <div id="htmlcaption" class="nivo-html-caption">
                <strong>Rendulic Glass - This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. 
            </div>
        </div>

    </div>

		</td>
	</tr>
</table>
</div>
<br/>
<br/>

<script type="text/javascript">
$(window).load(function() {
    $('#slider').nivoSlider({
        effect: 'fade', // Specify sets like: 'sliceDown,sliceDownLeft,sliceUp,sliceUpLeft,sliceUpDown,sliceUpDownLeft,fold,fade,random,slideInRight,slideInLeft,
                        //boxRandom,boxRain,boxRainReverse,boxRainGrow,boxRainGrowReverse
        slices: 15, // For slice animations
        boxCols: 8, // For box animations
        boxRows: 4, // For box animations
        animSpeed: 400, // Slide transition speed
        pauseTime: 3000, // How long each slide will show
        startSlide: 0, // Set starting Slide (0 index)
        directionNav: true, // Next & Prev navigation
        directionNavHide: true, // Only show on hover
        controlNav: true, // 1,2,3... navigation
        controlNavThumbs: true, // Use thumbnails for Control Nav
        pauseOnHover: true, // Stop animation while hovering
        manualAdvance: false, // Force manual transitions
        prevText: 'Prev', // Prev directionNav text
        nextText: 'Next', // Next directionNav text
        randomStart: false, // Start on a random slide
        beforeChange: function(){}, // Triggers before a slide transition
        afterChange: function(){}, // Triggers after a slide transition
        slideshowEnd: function(){}, // Triggers after all slides have been shown
        lastSlide: function(){}, // Triggers when last slide is shown
        afterLoad: function(){} // Triggers when slider has loaded
    });

    $('#slider').data('nivoslider').stop(); //Stop the Slider
});

</script>

<?php include('contact.html'); ?>
<?php include('footer.html'); ?>