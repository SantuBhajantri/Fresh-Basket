<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include './header1.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CUSTOMER HOME</title>
        <link rel="stylesheet" href="css/dropdown.css">
</style>
    </head>
    <body>
        
        
        <form method="POST" action="custhome.php">
            <br/><br/><br/><br/><br/><br/>
            Search Vegetabe Type:
            <select name='ddlvegtype'>
            <?php
            session_start();
            $_SESSION["sess_vegname"]=$vegname;
            $_SESSION["sess_sellingcost"]=$sellingcost;
            $arr_vegtype=array();
            $username=null;
            $passwd=null;

            $conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
            $stmt=$conn->prepare("select distinct vegtype from vegetables");
            $stmt->execute();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
            {
                array_push($arr_vegtype,$row);
            }
            $rows=count($arr_vegtype);
            for($i=0;$i<$rows;$i++)
            {
                echo "<option value=".$arr_vegtype[$i]["vegtype"].">".$arr_vegtype[$i]["vegtype"]."</option>";
            } 
            ?>
            </select>
            <br/><br/>
            <input type="submit" value="GO"/>
           <!-- //services -->

<!-- gallery -->
	<div class="gallery" id="food">
		<div class="heading">
			<h3 data-aos="zoom-in" >Our Vegetables</h3>
		</div>
			<div class="gallery-grids">
				<div data-aos="flip-right" class="col-md-3 gallery-grid">
					<div class="grid">
						<figure class="effect-roxy">
                                                    <a class="example-image-link" href="images/barley.jpg" data-lightbox="example-set" data-title="">
								<img src="images/barley.jpg" alt="" />
								<figcaption>
									<h3> <span>Barley</span></h3>
									<p>Barley, a member of the grass family is a major cereal grain grown in temperate climates.</p>
								</figcaption>	
							</a>
						</figure>
					</div>
				</div>
				<div data-aos="flip-right" class="col-md-3 gallery-grid">
					<div class="grid">
						<figure class="effect-roxy">
                                                    <a class="example-image-link" href="images/beans.jpg" data-lightbox="example-set" data-title="">
                                                        <img src="images/beans.jpg" alt="" />
								<figcaption>
									<h3> <span>Beans</span></h3>
									<p>A Bean is a seed of one of several genera of the flowering plant family.</p>
								</figcaption>	
							</a>
						</figure>
					</div>
				</div>
				<div data-aos="flip-right" class="col-md-3 gallery-grid">
					<div class="grid">
						<figure class="effect-roxy">
                                                    <a class="example-image-link" href="images/cabbage.jpg" data-lightbox="example-set" data-title="">
                                                        <img src="images/cabbage.jpg" alt="" />
								<figcaption>
									<h3> <span>Cabbage</span></h3>
									<p>Cabbage is a leafy green,red or white biennial plant grown as an annual vegetable.</p>
								</figcaption>		
							</a>
						</figure>
					</div>
				</div>	
				<div data-aos="flip-right" class="col-md-3 gallery-grid">
					<div class="grid">
						<figure class="effect-roxy">
                                                    <a class="example-image-link" href="images/carrot.jpg" data-lightbox="example-set" data-title="">
                                                        <img src="images/carrot.jpg" alt="" />
								<figcaption>
									<h3><span>Carrot</span></h3>
									<p>The carrot is a root vegetable usually orange in color.</p>
								</figcaption>	
							</a>
						</figure>
					</div>
				</div>
				<div data-aos="flip-right" class="col-md-3 gallery-grid">
					<div class="grid">
						<figure class="effect-roxy">
							<a class="example-image-link" href="images/cauli.jpg" data-lightbox="example-set" data-title="">
                                                            <img src="images/cauli.jpg" alt="" />
								<figcaption>
									<h3>Cauli <span>Flower</span></h3>
										<p>Cauli Flower is one of several vegetables in the species Brassica Oleracea.</p>
								</figcaption>	
							</a>
						</figure>
					</div>
				</div>
				<div data-aos="flip-right" class="col-md-3 gallery-grid">
					<div class="grid">
						<figure class="effect-roxy">
                                                    <a class="example-image-link" href="images/chillies.jpg" data-lightbox="example-set" data-title="">
								<img src="images/chillies.jpg" alt="" />
								<figcaption>
									<h3> <span>Chillies</span></h3>
									<p>Chilli is afruit of palnt from the Genus Capsicum.</p>
								</figcaption>		
							</a>
						</figure>
					</div>
				</div>
				<div data-aos="flip-right" class="col-md-3 gallery-grid">
					<div class="grid">
						<figure class="effect-roxy">
							<a class="example-image-link" href="images/garlic.jpg" data-lightbox="example-set" data-title="">
								<img src="images/garlic.jpg" alt="" />
								<figcaption>
									<h3> <span>Garlic</span></h3>
									<p>Garlic is the species in the onion genus.</p>
								</figcaption>		
							</a>
						</figure>
					</div>
				</div>
				<div data-aos="flip-right" class="col-md-3 gallery-grid">
					<div class="grid">
						<figure class="effect-roxy">
                                                    <a class="example-image-link" href="images/mustard.jpg" data-lightbox="example-set" data-title="">
                                                        <img src="images/mustard.jpg" alt="" />
								<figcaption>
									<h3><span>Mustard</span></h3>
									<p>Mustard is a condiment seeds. By this, mustard oil can be made.</p>
								</figcaption>		
							</a>
						</figure>
					</div>
				</div>
				<div data-aos="flip-right" class="col-md-3 gallery-grid">
					<div class="grid">
						<figure class="effect-roxy">
                                                    <a class="example-image-link" href="images/onion.jpg" data-lightbox="example-set" data-title="">
                                                        <img src="images/onion.jpg" alt="" />
								<figcaption>
									<h3><span>Onion</span></h3>
									<p>Onion is most widely cultivated species of the Genus Allium. </p>
								</figcaption>		
							</a>
						</figure>
					</div>
				</div>
				<div data-aos="flip-right" class="col-md-3 gallery-grid">
					<div class="grid">
						<figure class="effect-roxy">
							<a class="example-image-link" href="images/potato.jpg" data-lightbox="example-set" data-title="">
								<img src="images/potato.jpg" alt="" />
								<figcaption>
									<h3><span>Potato</span></h3>
									<p>Potato is a starchy, tuberous crop from the perennial night shade Solanum Tuberosum.</p>
								</figcaption>		
							</a>
						</figure>
					</div>
				</div>
				<div data-aos="flip-right" class="col-md-3 gallery-grid">
					<div class="grid">
						<figure class="effect-roxy">
							<a class="example-image-link" href="images/pea.jpg" data-lightbox="example-set" data-title="">
								<img src="images/pea.jpg" alt="" />
								<figcaption>
									<h3> <span>Pea</span></h3>
									<p>It is a small spherical seed of the pod fruit pisum sativum.</p>
								</figcaption>		
							</a>
						</figure>
					</div>
				</div>
				<div data-aos="flip-right" class="col-md-3 gallery-grid">
					<div class="grid">
						<figure class="effect-roxy">
							<a class="example-image-link" href="images/tomato.jpg" data-lightbox="example-set" data-title="">
								<img src="images/tomato.jpg" alt="" />
								<figcaption>
									<h3><span>Tomato</span></h3>
									<p>It is a vegetable of the plant solanum lycopersicum.</p>
								</figcaption>		
							</a>
						</figure>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
	</div>
<!-- //gallery -->
<script src="js/lightbox-plus-jquery.min.js"> </script><!-- for gallery js -->
 
<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
<!-- //js -->

 <!-- /Responsive slides js -->
						<script src="js/responsiveslides.min.js"></script>
			<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
			</script>
			<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider3").responsiveSlides({
									auto: true,
									pager:false,
									nav:true,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });
							
								});
							 </script>

 <!-- Responsive slides js -->
 
<!-- animation effects-js files-->
	<script src="js/aos.js"></script><!-- //animation effects-js-->
	<script src="js/aos1.js"></script><!-- //animation effects-js-->
<!-- animation effects-js files-->

<!-- //here starts scrolling icon -->
<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling script -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling script -->
<!-- //here ends scrolling icon -->

<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!-- //scrolling script -->
        </form>
    </body>
</html>