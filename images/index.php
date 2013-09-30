<?php
include('../lib/_init_.php');
init();

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<?php
		title();
		css(array(
			"res/css.css",
			"res/lb/jquery.lightbox-0.5.css",
		));
		js(array(
			"res/lb/jquery.lightbox-0.5.pack.js",
		));
	?>
	<style type="text/css">
		.an-image{
			background-color: #3b3b3b;
			margin: 10px;
			padding: 5px;
		}
		div.an-image img{
			display: block;
			margin: auto;
			max-width: 200px;
			max-height: 200px;
		}
		div.home-link{
			margin-left: auto;
			margin-right: auto;
			text-align: center;
			margin-top: 20px;
			margin-bottom: 20px;
		}
	</style>
	<script type="text/javascript">
		$(document).ready(function(){
			$('div.an-image a').lightBox();
		});
	</script>
</head>

<body>
	<div class="header">
		<div class="head-info">
			1205 18th Street<br>
			Woodward, OK 73802<br>
			ofc (580) 254-8066<br>
			fax (580) 256-8346<br>
			<a href="mailto:info@cedarridgegc.net">info@CedarRidgeGC.net</a>
		</div>
	</div>
	<div class="home-link">
		<a href="<?php echo BASE_URL ?>" class="home-link">Home</a>
	</div>
	<div class="images">
		<?php
			$dirp = __file__;
			$dirp = str_replace('/index.php','/imgs',$dirp);
			$files = scandir($dirp);
			$num = 1;
			foreach($files as $f){
				if($f=='.' || $f=='..'){
					
				} else {
					?>
					
					<div class="an-image f-left">
						<a rel="lightbox" href="<?php echo "imgs/" . $f; ?>">
							<img src="<?php echo BASE_URL . "/images/imgs/" . $f; ?>" alt="" />
						</a>
					</div>
				<?php
				if($num % 4 == 0){
					echo "<div class='clear'></div>";
				}
				$num++;
				}
			}
		?>
	</div>
	
</body>
</html>