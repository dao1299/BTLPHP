<!DOCTYPE html>
<html>
<head>
	<?php
	include 'xulymenu.php';
	?>
	<title>S&N</title>
	<link rel="stylesheet" type="text/css" href="layout.css">
	<link rel="shortcut icon" href="img/logo.ico">
	<script type="text/javascript">
		var list= new Array();
		var result
		list[0] = "img/banner1.jpg";
		list[1] = "img/banner2.jpg";
		list[2] = "img/banner3.jpg";
		list[3] = "img/banner4.jpg";
			
		function changeImgBanner(){
			i=Math.floor(Math.random()*list.length);
			kq='<img src="'+list[i]+ '"style="width: 100%;border-radius: 10px">';
			document.getElementById("banner").innerHTML=kq;
			setTimeout(changeImgBanner,2000);
		}
	</script>
<?php
	if (isset($_REQUEST['item'])){
		$_SESSION['itemView']=$_REQUEST['item'][0];
		header("location: detailItem.php");
	}
?>
</head>

<body onload="changeImgBanner()">
	<form action="#" method="get">
	<!--  -->

		<?php
			showSocial();
			showMenu();
		?>
		<div id="banner" style="width: 80%; margin: 0 auto">
			<img src="banner1.jpg" style="width: 100%; border-radius: 5px" >
		</div>
		<div class="content">
			<div class="title">
				APPLE - AUTHORISED RESELLER
			</div>
			<form action="#" method="post">
				<?php
					if (isset($_SESSION['query'])){
						showItem($_SESSION['query']);
					}
					else{
						showItem("select ma_sp,ten_sp,hinh_anh_1 FROM san_pham");	
					}
				?>	
			</form>
			
		</div>
		<div style="min-height: 100px">
			
		</div>
		<?php
			showFooter();
		?>

	</form>
</body>
</html>