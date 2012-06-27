<?php include('header.html'); ?>
<?php include('style.css'); ?>
<div align="center">
<table align="center" border="0" cellspacing="10" cellpadding="10" width="1000">
	<tr>
		<td align="center" valign="top"><font class="header_small">Art Gallery</font></td>
	</tr>
	<tr>
		<td align="center" valign="top">
    <div align="center">
        <div align="left" id="carousel1" 
		style="width:1000px; height:400px; 
		overflow:scroll; background: url(images/bg/xx.jpg) no-repeat center; 
		background-size:100%; ">
<!-- background: url(images/bg/xx.jpg) no-repeat fixed center top; background-size:100%; -->
            <a href="detail.php?title=African Bowl" title="African Bowl">
            <img class = "cloudcarousel" src="images/art/Art/African Bowl1205ac.jpg" alt="African Bowl" title="African Bowl" />
            </a>

            <a href="detail.php?title=Aztec Bowl" title="Aztec Bowl">
            <img class = "cloudcarousel" src="images/art/Art/Aztec Bowl1206ac.jpg" alt="Aztec Bowl"" title="Aztec Bowl" />
            </a>

            <a href="detail.php?title=Aztec Square" title="Aztec Square">
            <img class = "cloudcarousel" src="images/art/Art/Aztec Square1201ac.jpg" alt="Aztec Square" title="Aztec Square" />
            </a>

            <a href="detail.php?title=Damask" title="Damask">
            <img class = "cloudcarousel" src="images/art/Art/Damask1210ac.jpg" alt="Damask" title="Damask" />
            </a>

            <a href="detail.php?title=Florence Bowl" title="Florence Bowl">
            <img class = "cloudcarousel" src="images/art/Art/Florence Bowl1207ac.jpg" alt="Florence Bowl" title="Florence Bowl" />
            </a>

            <a href="detail.php?title=Gilded Lace" title="Gilded Lace">
            <img class = "cloudcarousel" src="images/art/Art/Gilded Lace1210ac.jpg" alt="Gilded Lace" title="Gilded Lace" />
            </a>

            <div id="left-but" class="carouselLeft" style="position:absolute;top:20px;left:10px;"></div>
            <div id="right-but" class="carouselRight" style="position:absolute;top:20px;right:10px;"></div>      
        </div>
        
        <!-- Define elements to accept the alt and title text from the images. -->
        <p id="title-text"></p>
        <p id="alt-text"></p>
    </div>
		</td>
	</tr>
</table>
</div>
<br/>
<br/>
<?php include('contact.html'); ?>
<?php include('footer.html'); ?>