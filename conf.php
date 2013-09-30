<?php
include('lib/_init_.php');
init();
//$ct = new CTContent;
$id = new QSID;
$ids = $id->new_id(1);

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>

	<title>Cedar Ridge - Login</title>
	
	
	
	<link type="text/css" rel="stylesheet" href="res/css.css" />
	
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
	
	<script type="text/javascript" src="res/js.js"></script>
	
	<style type="text/css">
		.body-content{
			width: 400px;
			margin-left: auto;
			margin-right: auto;
			padding: 20px;
			border: #848484 1px solid;
			box-shadow: inset 2px 2px 2px #000;
			border-radius: 10px;
		}
		h4{
			text-align: center;
		}
		.buttons{
			text-align: center;
		}
		input{
			margin-top: 25px;
			width: 200px;
		}
	</style>
	
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
	<h4>Confidentialality</h4>
	<div class="body-content">
		The Confidential Information provided to Subcontractor shall be used by Subcontractor solely for the purposes of carrying out the Work.  In no event may any developmental work relating to Contractor Confidential Information be carried out by any third party without prior written consent of Contractor.  Subcontractor shall only make copies that are reasonably required to carry out the Work. Nothing in this Agreement shall be construed as granting any rights or interest in any Contractor software or Contractor's Confidential Information to Subcontractor. All writings or embodiments relating to the confidential Information within shall remain the property of Contractor.
	</div>
	<div class="buttons">
		<input type="button" value="I Agree" onclick="jsLink('bin/acc.php?id=<?php echo $ids; ?>')" />
		<input type="button" value="Cancel" onclick="jsLink('index.php')" />
	</div>
</body>
</html>