<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once 'header.php'; ?>
</head>
<body>
<nav>
<?php include_once 'nav.php';?>
</nav>
<div id="demo" class="carousel slide" data-ride="carousel">
<!-- Indicators -->
<ul class="carousel-indicators">
	<li data-target="#demo" data-slide-to="0" class="active"></li>
	<li data-target="#demo" data-slide-to="1"></li>
	<li data-target="#demo" data-slide-to="2"></li>
</ul>
	<!-- The slideshow -->
<div class="carousel-inner">
	<div class="carousel-item active">
		<img src="111.jpg" alt="iphone" width="100%" height="100%">
	</div>
	<div class="carousel-item">
		<img src="s2.jpg" alt="tab" width="100%" height="100%">
	</div>
	<div class="carousel-item">
		<img src="s3.jpg" alt="samsung" width="100%" height="100%">
	</div>
	</div>
	
	<!-- Left and right controls -->
	<a class="carousel-control-prev" href="#demo" data-slide="prev">
		<span class="carousel-control-prev-icon"></span>
	</a>
	<a class="carousel-control-next" href="#demo" data-slide="next">
		<span class="carousel-control-next-icon"></span>
	</a>
</div>


<?php 
  $products = array(
 	array("img" => "1111.jpg","name"=>"s3","price"=>"Rs:55000","click"=>"Buy Now" ),
 	array("img" =>"s2.jpg","name"=>"s2 tab","price"=>"Rs:45000","click"=>"Buy Now" ),
 	array("img" =>"s3.jpg","name"=>"s3","price"=>"Rs:5000","click"=>"Buy Now" ),
 	array("img" =>"samsung-galaxy-j7.jpg","name"=>"samsung-galaxy-j7","price"=>"Rs:85000","click"=>"Buy Now" ),
 	array("img" =>"Samsung-Glaxy-note8.png","name"=>"samsung-galaxy-note8","price"=>"Rs:115000","click"=>"Buy Now" ),
 	array("img" =>"apple-ipad.jpg","name"=>"apple-ipad","price"=>"Rs:50000","click"=>"Buy Now" ),
 	array("img" =>"galaxy-note-8.jpg","name"=>"galaxy-note-8","price"=>"Rs:55000","click"=>"Buy Now" ),
 	array("img" =>"Samsung-Galaxy-Tab-S2.jpg","name"=>"Samsung-Galaxy-Tab-S2","price"=>"Rs:55000","click"=>"Buy Now" ),
 	array("img" =>"samsung-galaxy-tab-s3.jpg","name"=>"samsung-galaxy-tab-s3","price"=>"Rs:55000","click"=>"Buy Now" ),
 	array("img" =>"111.jpg","name"=>"s3","price"=>"Rs:55000","click"=>"Buy Now" ),
 	array("img" =>"111.jpg","name"=>"s3","price"=>"Rs:55000","click"=>"Buy Now" ),
 	
 );
 $pro_counter=1;
?>


		<div class="container">    
		<h1 align="center"> Latest Mobiles</h1>
		<div class="row justify-content-center mt-4">
<?php
for($proloop=0;$proloop<count($products);$proloop++){
?>
<div class="col-md-4">
	<div class="card" style="width:100%;">
    <img class="<b><?php echo $products[$proloop]["name"]?></b>" src="<?php echo $products[$proloop]["img"]?>" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title"><?php echo $products[$proloop]["name"]?></h4>
      <p class="card-text"><b><?php echo $products[$proloop]["price"]?></b></p>
      <a href="#" class="btn btn-primary"> <b><?php echo $products[$proloop]["click"]?></b></a>
    </div>
  </div>
</div>
<?php
    if($pro_counter==3 && $proloop<count($products)-1){
        $pro_counter=0;

            }
    $pro_counter++;
?>
<?php }?>
</div>
</div>
<footer>
	<?php include_once 'footer.php';?>
</footer>
</body>
</html>
