<?php include 'admin/config7.php'; $aclass="active"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $headertext ?></title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Edulearn Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<!-- Bootstrap-Core-Css -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Testimonials-Css -->
	<link href="css/mislider.css" rel="stylesheet" type="text/css" />
	<link href="css/mislider-custom.css" rel="stylesheet" type="text/css" />
	<!-- Style-Css -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Font-Awesome-Icons-Css -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	 rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- //Web-Fonts -->

</head> 

<body>
    <?php include 'header.php';?>

	<!-- banner -->
	<div class="banner-agile-2">
	<?php include 'topnav.php';?>
	</div>
	<!-- breadcrumb -->
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.html">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Search Student</li>
		</ol>
	</nav>
	<!-- breadcrumb -->
	<!-- //banner -->
	<div class="about-page py-5">
		<div class="container py-xl-5 py-lg-3">
		<h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">Search Enrolled Student
			</h3>

			<div class="row about-head-wthree">
				<div class="col-lg-6 left-abw3ls">
					<img src="images/course-1.png" alt="" class="img-fluid">
				</div>
				<div class="col-lg-6 right-abw3ls mt-lg-0 mt-sm-5 mt-4">
					
					
				
				<!-- </div>
			</div> -->
		<!-- </div>
	</div> -->

<div align="right" style="padding:10px; text-align: center;">
<form name="form1" action="" method="get" style="display: flex; justify-content: flex-end;">
    <input type="text" name="enrollment" placeholder="Enter Enrollment Id" value="<?= isset($_GET['enrollment']) ? $_GET['enrollment'] : '' ?>" style="width: 350px; height: 30px; padding: 1.5vmax; box-sizing: border-box; border: 1px solid  #a19a9a; font-size: 20px; border-radius: 30px; border-top-right-radius: 0px; border-bottom-right-radius: 0px;" />
    <button type="submit" class="submit-button" style="padding: 5px 18px; border: none; background-color: #55aff7; color: #fff; border-radius: 4px; border-top-right-radius: 30px; border-bottom-right-radius: 30px; cursor: pointer;">GET CERTIFICATE</button>
</form>



<br /><br />


<?php if($_GET['enrollment']!="") {	$result = mysqli_query($con,"SELECT * FROM `dc_certificate` WHERE enrollment='$_GET[enrollment]' and hide='0' and status='1' "); 
									if($row = mysqli_fetch_array($result)) { ?>

<!-- 
<div style="border: 1px solid #CCC; padding: 10px; width: 600px;"> -->
<table style="border-collapse: collapse; width: 600px;">
    <tr>
        <th style="border: 1px solid #CCC; padding: 8px;">Name</th>
        <td style="border: 1px solid #CCC; padding: 8px;"><?php echo $row['name'] ?></td>
    </tr>
    <tr>
        <th style="border: 1px solid #CCC; padding: 8px;">Father's Name</th>
        <td style="border: 1px solid #CCC; padding: 8px;"><?php echo $row['fname'] ?></td>
    </tr>
    <tr>
        <th style="border: 1px solid #CCC; padding: 8px;">Contact</th>
        <td style="border: 1px solid #CCC; padding: 8px;"><?php echo $row['contact'] ?></td>
    </tr>
    <tr>
        <th style="border: 1px solid #CCC; padding: 8px;">Enrollment Id</th>
        <td style="border: 1px solid #CCC; padding: 8px;"><?php echo $row['enrollment'] ?></td>
    </tr>
    <tr>
        <th style="border: 1px solid #CCC; padding: 8px;">Remarks</th>
        <td style="border: 1px solid #CCC; padding: 8px;"><?php echo $row['remarks'] ?></td>
    </tr>
</table><br/>


<button style="background-color: #0000FF; color: #FFFFFF; padding: 10px; border: none; text-decoration: none;">
    <a href="admin/images/pdf/<?php echo $row['certificate'] ?>" style="color: #FFFFFF; text-decoration: none;">View Certificate</a>
</button>

<?php } ?>

<?php } else { ?>No certificate found <?php } ?>




</div>
	</div>
</div>
</div>
</div>

<?php include 'footer.php'; ?>